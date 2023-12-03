<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DeviceType;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Product;
use App\Models\ProductDeviceType;
use App\Models\Reviews;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    use ImageUploadTrait;
    public function indexPage()
    {
        $deviceTypes = DeviceType::all();
        $categories = Category::all();
        $topSellingItems = Product::orderBy('selling_number', 'desc')
            ->take(10)
            ->get();
        $popularGames = Product::orderBy('reviews', 'desc')
            ->take(6)
            ->get();
        // dd($popularGames);
        return view('frontend.index', compact('categories', 'topSellingItems', 'popularGames', 'deviceTypes'));
    }
    public function loginPage()
    {
        return view('frontend.auth.login');
    }
    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $request->validate([
                'login_id' => 'required|email|exists:clients,email',
                'password' => 'required|min:5|max:45',
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'Email does not exists in the system',
                'password.required' => 'Password is required',
            ]);
        } else {
            $request->validate([
                'login_id' => 'required|exists:clients,username',
                'password' => 'required|min:5|max:45',
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.username' => 'Invalid username',
                'login_id.exists' => 'Email does not exists in the system',
                'password.required' => 'Password is required',
            ]);
        }

        $credts = array(
            $fieldType => $request->login_id,
            'password' => $request->password
        );

        if (Auth::guard('client')->attempt($credts)) {
            return redirect()->route('home');
        } else {

            $notification = array(
                'message' => 'Incorrect credentials!',
                'alert-type' => 'error',
            );
            return redirect()->route('login')->with($notification);
        }
    }
    public function logoutHandler(Request $request)
    {
        Auth::guard('client')->logout();
        $notification = array(
            'message' => 'You are logged out successfully!',
            'alert-type' => 'success',
        );
        return redirect()->route('login')->with($notification);
    }
    public function profilePage()
    {
        return view('frontend.profile.profile');
    }
    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|max:4192',
            'name' => 'required|max:30',
            'username' => 'required|max:30',
            'email' => 'required|max:50',
            'address' => 'required|max:50',
            'phone' => 'required|min:10'
        ]);

        $user = User::findOrFail($id);

        if ($user->image == null) {
            $imagePath = $this->uploadImage($request, 'image', 'uploads');
            $user->image = $imagePath;
        } else {
            $imagePath = $this->updateImage($request, 'image', 'uploads', $user->image);
            $user->image = empty(!$imagePath) ? $imagePath : $user->image;
        }
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();

        $notification = array(
            'message' => 'User Updated Successfully!!',
            'alert-type' => 'success',
        );

        return back()->with($notification);
    }
    public function changePasswordPage()
    {
        return view('frontend.profile.change-password');
    }
    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) {
            $notification = array(
                'message' => 'Old Password Does Not Match!',
                'alert-type' => 'error',
            );
            return back()->with($notification);
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        $notification = array(
            'message' => 'Password Changed Successfully!',
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
    public function userOrders()
    {
        $userId = Auth::user()->id;
        $userOrders = Order::where('user_id', $userId)->get();
        $userItems = [];
        foreach ($userOrders as $order) {
            $orderId = $order->id;
            $orderItems = Order_item::where('order_id', $orderId)->get();
            $userItems[$orderId] = $orderItems;
        }
        return view('frontend.profile.user-orders', compact('userItems'));
    }
    public function storePage(Request $request)
    {
        $deviceTypes = DeviceType::all();

        $query = Product::query();

        // Apply search filter if 'name' is provided in the request
        if ($request->has('name') && $request->filled('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }

        // Apply device type filter
        if ($request->has('device_type') && $request->filled('device_type')) {
            $query->whereHas('deviceTypes', function ($subQuery) use ($request) {
                $subQuery->where('name', $request->device_type);
            });
        }

        // Apply price filter
        if ($request->has('price-filter')) {
            $priceRange = json_decode($request->input('price-filter'), true);

            if ($priceRange && isset($priceRange[0], $priceRange[1])) {
                $query->whereBetween('price', [$priceRange[0], $priceRange[1]]);
            }
        }

        $itemsPerPage = 6;
        $currentPage = $request->get('page', 1);

        // Retrieve the total count without pagination
        $totalItems = $query->count();

        // Paginate the results
        $products = $query->paginate($itemsPerPage);

        $totalPages = ceil($totalItems / $itemsPerPage);

        return view('frontend.store-catalog', compact('products', 'totalItems', 'itemsPerPage', 'totalPages', 'currentPage', 'deviceTypes'));
    }
    public function storeDevicePage($deviceType)
    {
        // Retrieve the DeviceType model based on the name
        $deviceTypeModel = DeviceType::where('name', $deviceType)->first();

        if (!$deviceTypeModel) {
            // Handle case where the device type is not found
            abort(404);
        }

        // Retrieve products associated with the device type
        $products = $deviceTypeModel->products;

        return view('frontend.store-catalog-device', compact('deviceType', 'products'));
    }
    public function singlePage($id)
    {
        $reviews = Reviews::where('product_id', $id)->get();
        $categories = Category::select('categories.*')
            ->join('product_categories', 'categories.id', '=', 'product_categories.category_id')
            ->where('product_categories.product_id', $id)
            ->get();
        $product = Product::findOrFail($id);
        return view('frontend.single-product', compact('product', 'categories', 'reviews'));
    }
    public function categoryPage($id)
    {
        $products = Product::select('products.*')
            ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
            ->where('product_categories.category_id', $id)
            ->get();
        $category = Category::findOrFail($id);
        $categories = Category::all();
        return view('frontend.category-products', compact('products', 'category', 'categories'));
    }
    public function cartPage()
    {
        return view('frontend.store-cart');
    }

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => ['image' => $product->image]
        ]);

        return redirect()->back();
    }

    public function qtyIncrement($id)
    {
        $product = Cart::get($id);
        $updateQty = $product->qty + 1;
        Cart::update($id, $updateQty);

        return redirect()->back();
    }
    public function qtyDecrement($id)
    {
        $product = Cart::get($id);
        $updateQty = $product->qty - 1;
        if ($updateQty > 0) {
            Cart::update($id, $updateQty);
        }

        return redirect()->back();
    }

    public function removeProduct($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
    public function checkoutPage()
    {
        return view('frontend.checkout');
    }

    public function review(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'message' => 'required',
            'review_rate' => 'required',
        ]);

        $review = new Reviews();
        $productId = $request->product_id;

        $review->user_id = $request->user_id;
        $review->product_id = $request->product_id;
        $review->title = $request->title;
        $review->name = $request->name;
        $review->review = $request->message;
        $review->rating = $request->review_rate;
        $review->save();

        // Increment reviews count for the product
        $product = Product::findOrFail($productId);
        $product->increment('reviews', 1);

        // Calculate the new average rating for the product
        $averageRating = Reviews::where('product_id', $productId)->avg('rating');

        // Update the product's average rating
        $product->averageRating = $averageRating;
        $product->save();

        Session::flash('success', 'Review Successfully Submitted!');
        return back();
    }
}
