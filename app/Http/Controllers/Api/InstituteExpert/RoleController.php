<?php

namespace App\Http\Controllers\Api\InstituteExpert;

use App\Models\Role;

class RoleController extends InstituteExpertController
{
    public function index()
    {
        return Role::where('id', '!=', Role::ADMIN)->where('id', '!=', Role::SUPER_ADMIN)->get();
    }
}
