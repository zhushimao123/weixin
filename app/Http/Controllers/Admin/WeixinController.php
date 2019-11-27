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
    //获取access_token
    public function token()
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx48451c201710dbcd&secret=f583f90f3aed8ec33ae6dd30eceebe5f";
        $response = file_get_contents($url);
        var_dump($response);
    }
}
