<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
    public function index()
    {
        return view('panel.admin-vue');
    }


    public function logout(){
        Auth::logout();

        redirect('/login');
    }
}
