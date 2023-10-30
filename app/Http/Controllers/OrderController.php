<?php

namespace App\Http\Controllers;

use App\DataTables\OrdersDataTable;
use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Discount;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OrdersDataTable $dataTable)
    {
        return $dataTable->render("admin.pages.orders.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $discounts = Discount::all();
        return view("admin.pages.orders.create", compact('clients', 'discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => ['required'],
            'date' => ['required', 'date'],
            'status' => ['required'],
            'total' => ['required', 'numeric'],
            'user_id' => ['required'],
            'discount_id' => ['nullable'],
        ]);

        $order = new Order();

        $order->address = $request->address;
        $order->date = $request->date;
        $order->status = $request->status;
        $order->total = $request->total;
        $order->user_id = $request->user_id;
        $order->discount_id = $request->discount_id;
        $order->save();

        $notification = array(
            'message' => 'Order Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.orders.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clients = Client::all();
        $discounts = Discount::all();
        $order = Order::findOrFail($id);
        return view('admin.pages.orders.edit', compact('order', 'clients', 'discounts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => ['required'],
            'date' => ['required', 'date'],
            'status' => ['required'],
            'total' => ['required', 'numeric'],
            'user_id' => ['required'],
            'discount_id' => ['nullable'],
        ]);

        $order = Order::findOrFail($id);

        $order->address = $request->address;
        $order->date = $request->date;
        $order->status = $request->status;
        $order->total = $request->total;
        $order->user_id = $request->user_id;
        $order->discount_id = $request->discount_id;
        $order->save();

        $notification = array(
            'message' => 'Order Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.orders.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
