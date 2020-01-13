<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends AdminController
{
    public function index()
    {
        return User::with('roles')->where('id', '!=', Auth::id())->get();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $user = new User();
        $user->fill($request->all());
        $user->save();
        $user->roles()->sync($request->roles);

        return $this->successNotify();
    }

    public function getById($id)
    {

        return User::where('id', '!=', Auth::id())->where('id', $id);
    }

    public function block($id)
    {
        $user = $this->getById($id)->first();
        $user->is_blocked = !$user->is_blocked;
        $user->save();
        return $this->successNotify();
    }

    public function roleUpdate($id, $role)
    {
        $this->getById($id)->update(['role' => $role]);

        return $this->successNotify();
    }

    public function fieldUpdate(Request $request, $id, $field)
    {
        $this->getById($id)->update([$field => $request->data]);

        return $this->successNotify();
    }

    public function destroy($id)
    {
        $this->getById($id)->first()->delete();

        return $this->deleteNotify();
    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'roles' => 'required'
        ], [
            'roles.required' => 'ورود حداقل بک نقش الزامی ست.'
        ]);

        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }

        return $validator->getData();


    }

}
