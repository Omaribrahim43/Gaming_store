<?php

namespace App\Http\Controllers;

use App\DataTables\DiscountDataTable;
use App\Models\Discount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DiscountDataTable $dataTable)
    {
        return $dataTable->render("admin.pages.discounts.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.discounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'discount_code' => ['required'],
            'discount_percentage' => ['required'],
        ]);

        $discount = new Discount();

        $discount->discount_code = $request->discount_code;
        $discount->discount_percentage = $request->discount_percentage;
        $discount->save();

        $notification = array(
            'message' => 'Discount Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.discounts.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $discount = Discount::findOrFail($id);
        return view('admin.pages.discounts.edit', compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'discount_code' => ['required'],
            'discount_percentage' => ['required'],
        ]);

        $discount = Discount::findOrFail($id);

        $discount->discount_code = $request->discount_code;
        $discount->discount_percentage = $request->discount_percentage;
        $discount->save();

        $notification = array(
            'message' => 'Discount Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.discounts.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Discount::findOrFail($id);
        $order->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
