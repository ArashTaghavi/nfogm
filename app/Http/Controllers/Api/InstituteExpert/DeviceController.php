<?php

namespace App\Http\Controllers\Api\InstituteExpert;

use App\Models\Device;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeviceController extends InstituteExpertController
{
    public function index()
    {
        return Device::all();
    }


    public function store(Request $request)
    {
        $this->handleValidate($request);
        $device = new Device();
        $device->fill($request->all());
        $device->save();
        return $this->successNotify();

    }

    public function getById(Device $device)
    {
        return $device;
    }


    public function fieldUpdate(Request $request, $id, $field)
    {

        (Device::where('id',$id))->update([$field => $request->data]);

        return $this->successNotify();
    }


    public function destroy(Device $device)
    {
        $device->delete();

        return $this->deleteNotify();
    }


    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'company' => 'required',
            'name' => 'required',
            'code' => 'required',
            'location' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails())
            abort(403, $validator->errors()->first());

        return $validator->getData();
    }
}
