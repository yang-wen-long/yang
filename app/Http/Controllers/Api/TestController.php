<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        $appid = "wx57336fc970e851dd";
        $appserice = "60055b853d5141421d3b33f92846f420";
        $desc = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appserice;
        $asc = file_get_contents($desc);
        echo $asc;
    }
    public function token(){
        
    }


}
