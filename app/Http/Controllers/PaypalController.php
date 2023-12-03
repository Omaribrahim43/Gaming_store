<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaypalController extends Controller
{
    public function buyProduct(Request $request)
    {
        session()->flash('date', $request->input('date'));
        session()->flash('address', $request->input('address'));

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => Cart::total(),
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // buy the course if the paymnet is successful
            $address = session('address');
            $date = session('date');
            $user_id = Auth::user()->id;

            $order = Order::create([
                'address' => $address,
                'date' => $date,
                'total' => Cart::total(),
                'user_id' => $user_id,
            ]);
            foreach (Cart::content() as $content) {
                Order_item::create([
                    'order_id' => $order->id,
                    'quantity' => $content->qty,
                    'price' => $content->price,
                    'product_id' => $content->id,
                ]);
                $currentSellingNumber = Product::where('id', $content->id)->value('selling_number');

                Product::where('id', $content->id)->update(['selling_number' => $currentSellingNumber + $content->qty]);
            }
            Cart::destroy();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function cancel()
    {
        return "Payment is cancelled!";
    }
}
