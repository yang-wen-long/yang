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
        $appid = "wx57336fc970e851dd";
        $appserice = "60055b853d5141421d3b33f92846f420";
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appserice;
        // 创建一个新cURL资源
        $ch = curl_init();

        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        //将返回结果通过变量接受

        // 抓取URL并把它传递给浏览器
        $respose =  curl_exec($ch);
        
         echo $respose;
        // 关闭cURL资源，并且释放系统资源
        curl_close($ch);
    }

//https://guzzle-cn.readthedocs.io/zh_CN/latest/overview.html
}
