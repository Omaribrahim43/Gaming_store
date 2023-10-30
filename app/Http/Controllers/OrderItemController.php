<?php

namespace App\Http\Controllers;

use App\DataTables\OrderItemsDataTable;
use App\Models\Order_item;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OrderItemsDataTable $dataTable)
    {
        return $dataTable->render("admin.pages.order-items.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::all();
        $products = Product::all();
        return view('admin.pages.order-items.create', compact('orders', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'quantity' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'order_id' => ['required'],
            'product_id' => ['required'],
        ]);

        $orderItem = new Order_item();

        $orderItem->quantity = $request->quantity;
        $orderItem->price = $request->price;
        $orderItem->order_id = $request->order_id;
        $orderItem->product_id = $request->product_id;
        $orderItem->save();

        $notification = array(
            'message' => 'Order Item Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.order-items.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_item $order_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $orderItem = Order_item::findOrFail($id);
        $orders = Order::all();
        $products = Product::all();
        return view('admin.pages.order-items.edit', compact('orders', 'products', 'orderItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'order_id' => ['required'],
            'product_id' => ['required'],
        ]);

        $orderItem = Order_item::findOrFail($id);

        $orderItem->quantity = $request->quantity;
        $orderItem->price = $request->price;
        $orderItem->order_id = $request->order_id;
        $orderItem->product_id = $request->product_id;
        $orderItem->save();

        $notification = array(
            'message' => 'Order Item Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.order-items.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $orderItem = Order_item::findOrFail($id);
        $orderItem->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
