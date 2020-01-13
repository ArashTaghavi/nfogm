<?php

namespace App\Http\Controllers\Api\InstituteExpert;

use App\Models\DetailDevice;
use App\Models\Ran;
use Illuminate\Http\Request;


class DetailDeviceController extends InstituteExpertController
{
    public function index($id)
    {
        return DetailDevice::where('device_id', ($id))->first();
    }


    public function store(Request $request, $id)
    {
        $request->has_bypass_route = $request->has_bypass_route == false ? 0 : 1;
        $request->is_same_ran = $request->is_same_ran == false ? 0 : 1;
        if (isset($request->ran_count)) {
            $ran = new Ran();

        }
        $detail_device = new DetailDevice();
        $detail_device->device_id = $id;
        $detail_device->fill($request->all());
        $detail_device->save();
        return $this->successNotify();
    }

    public function update(Request $request, $id)
    {
        $request->has_bypass_route = $request->has_bypass_route == false ? 0 : 1;
        $request->is_same_ran = $request->is_same_ran == false ? 0 : 1;

        $detail_device = DetailDevice::where('device_id', $id)->first();
        $detail_device->fill($request->all());
        $detail_device->save();

        return $this->successNotify();

    }
}
