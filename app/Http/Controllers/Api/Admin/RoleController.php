<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends AdminController
{
    public function index()
    {

        return Role::where('id', '!=', Role::ADMIN)->where('id', '!=', Role::SUPER_ADMIN)->get();
    }

    public function getById(Role $role)
    {
        return $role;
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $role = new Role();
        $role->fill($request->all());
        $role->save();

        $role->permissions()->sync($request->permissions);

        return $this->successNotify();
    }

    public function update(Request $request, Role $role)
    {
        $this->handleValidate($request);
        $role->fill($request->all());
        $role->save();

        return $this->successNotify();
    }

    public function destroy(Role $role)
    {
        $role->delete();

        $this->successNotify();
    }

    public function permissions()
    {
        return Permission::all();
    }


    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), ['title' => 'required']);

        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }

        return $validator->getData();
    }
}
