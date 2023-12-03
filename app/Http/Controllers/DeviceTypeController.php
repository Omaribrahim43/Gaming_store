<?php

namespace App\Http\Controllers;

use App\DataTables\DeviceTypeDataTable;
use App\Http\Controllers\Controller;
use App\Models\DeviceType;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class DeviceTypeController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DeviceTypeDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.device-types.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.device-types.create');
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
            'name' => ['required', 'string'],
            'image' => ['required', 'image']
        ]);
        $deviceType = new DeviceType();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $deviceType->image = $imagePath;
        $deviceType->name = $request->name;
        $deviceType->save();

        $notification = array(
            'message' => 'DeviceType Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.device_types.index')->with($notification);
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
        $deviceType = DeviceType::findOrFail($id);
        return view('admin.pages.device-types.edit', compact('deviceType'));
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
            'name' => ['required', 'string'],
            'image' => ['required', 'image']
        ]);
        $deviceType = DeviceType::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $deviceType->image);

        $deviceType->image = empty(!$imagePath) ? $imagePath : $deviceType->image;
        $deviceType->name = $request->name;
        $deviceType->save();

        $notification = array(
            'message' => 'DeviceType Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.device_types.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deviceType = DeviceType::findOrFail($id);
        $this->deleteImage($deviceType->image);
        $deviceType->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
