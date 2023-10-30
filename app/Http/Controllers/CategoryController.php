<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryDataTable;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render("admin.pages.categories.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->save();

        $notification = array(
            'message' => 'Category Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.categories.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        $notification = array(
            'message' => 'Category Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.categories.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
