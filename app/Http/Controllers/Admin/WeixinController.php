<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WeixinController extends Controller
{
    //确认微信服务器
    public function index()
    {
        echo $_GET['echostr'];
    }
}
