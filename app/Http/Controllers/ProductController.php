<?php

namespace App\Http\Controllers;

use App\DataTables\ProductDataTable;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render("admin.pages.products.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:4196', 'image'],
            'name' => ['required', 'max:50'],
            'price' => ['required', 'numeric'],
            'description' => ['required', 'max:100'],
        ]);

        $product = new Product();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $product->image = $imagePath;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        $notification = array(
            'message' => 'Product Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.products.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.pages.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => ['nullable', 'max:4196', 'image'],
            'name' => ['required', 'max:50'],
            'price' => ['required', 'numeric'],
            'description' => ['required', 'max:100'],
        ]);

        $product = Product::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $product->image);

        $product->image = empty(!$imagePath) ? $imagePath : $product->image;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        $notification = array(
            'message' => 'Product Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.products.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $this->deleteImage($product->image);
        $product->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
