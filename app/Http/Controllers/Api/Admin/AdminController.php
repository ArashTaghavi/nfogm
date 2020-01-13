<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function successNotify()
    {
        return ['message' => __('messages.save_success')];
    }

    public function deleteNotify()
    {
        return ['message' => __('messages.delete_success')];
    }


}
