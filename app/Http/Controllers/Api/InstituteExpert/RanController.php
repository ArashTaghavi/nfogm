<?php

namespace App\Http\Controllers\Api\InstituteExpert;

use App\Http\Controllers\Controller;
use App\Http\Middleware\IsInstituteExpert;
use App\Models\DetailDevice;
use App\Models\Ran;
use Illuminate\Http\Request;

class RanController extends InstituteExpertController
{
    public function store(Request $request, $id)
    {
        $ran = new Ran();
        $ran->detail_device_id = $id;
        $ran->fill($request->all());
        $ran->save();

        return $this->successNotify();
    }

    public function update(Request $request, $id)
    {

        $ran = Ran::where('device_id', $id)->first();
        $ran->fill($request->all());
        $ran->save();

        return $this->successNotify();

    }
}
