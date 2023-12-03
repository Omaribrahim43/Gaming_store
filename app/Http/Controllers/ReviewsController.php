<?php

namespace App\Http\Controllers;

use App\DataTables\ReviewsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ReviewsDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.reviews.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = User::all();
        $products = Product::all();
        return view('admin.pages.reviews.create', compact('clients', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'numeric'],
            'product_id' => ['required', 'numeric'],
            'title' => ['required', 'alpha', 'max:20'],
            'rating' => ['required', 'numeric'],
            'review' => ['required', 'alpha', 'max:100'],
        ]);

        $review = new Reviews();

        $review->user_id = $request->user_id;
        $review->product_id = $request->product_id;
        $review->name = $request->name;
        $review->title = $request->title;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

        $notification = array(
            'message' => 'Review Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.reviews.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Reviews::findOrFail($id);
        $clients = User::all();
        $products = Product::all();
        return view('admin.pages.reviews.edit', compact('clients', 'products', 'review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => ['required', 'numeric'],
            'product_id' => ['required', 'numeric'],
            'title' => ['required', 'alpha', 'max:20'],
            'rating' => ['required', 'numeric'],
            'review' => ['required', 'alpha', 'max:100'],
        ]);

        $review = Reviews::findOrFail($id);

        $review->user_id = $request->user_id;
        $review->product_id = $request->product_id;
        $review->name = $request->name;
        $review->title = $request->title;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

        $notification = array(
            'message' => 'Review Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.reviews.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
