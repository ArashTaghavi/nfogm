<?php

namespace App\Http\Controllers\Api\InstituteExpert;

use App\Models\Permission;

class BaseInformationController extends InstituteExpertController
{
    public function permissions()
    {
        return Permission::all();
    }


}
