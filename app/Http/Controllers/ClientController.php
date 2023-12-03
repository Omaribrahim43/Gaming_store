<?php

namespace App\Http\Controllers;

use App\DataTables\ClientsDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ClientsDataTable $dataTable)
    {
        return $dataTable->render("admin.pages.clients.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:4196', 'image'],
            'username' => ['required', 'max:50'],
            'name' => ['required', 'max:30'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric', 'min:10'],
            'address' => ['required'],
            'status' => ['required'],
        ]);

        $user = new User();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $user->image = $imagePath;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make('password');
        $user->address = $request->address;
        $user->status = $request->status;
        $user->save();

        $notification = array(
            'message' => 'Client Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.clients.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = User::findOrFail($id);
        return view('admin.pages.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'max:4196', 'image'],
            'username' => ['required', 'max:50'],
            'name' => ['required', 'max:30'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric', 'min:10'],
            'address' => ['required', 'regex:/([- ,\/0-9a-zA-Z]+)/'],
            'status' => ['required'],
        ]);

        $user = User::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $user->image);

        $user->image = empty(!$imagePath) ? $imagePath : $user->image;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make('password');
        $user->address = $request->address;
        $user->status = $request->status;
        $user->save();

        $notification = array(
            'message' => 'Client Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.clients.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $this->deleteImage($user->image);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
