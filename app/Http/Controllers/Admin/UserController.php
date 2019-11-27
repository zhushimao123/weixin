<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //x-admin 后台登陆
    public function loginForm(Request $request)
    {
        if($request->isMethod('post'))
        {

        }else{
            return view('admin.login');
        }

    }
}
