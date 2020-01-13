<?php

namespace App\Http\Controllers\Api\InstituteExpert;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{
    public function index()
    {
        return view('panel.institute-expert-vue');
    }


    public function logout(){
        Auth::logout();

        redirect('/login');
    }
}
