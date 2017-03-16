<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        //零食头部推荐品牌文档
        $lingshibrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',1)->take(10)->latest()->get();
        $chaohuobrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',3)->take(10)->latest()->get();
        $ganguobrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',4)->take(10)->latest()->get();
        $jinkoubrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',5)->take(10)->latest()->get();
        return view('frontend.index',compact('lingshibrands','chaohuobrands','ganguobrands','jinkoubrands'));
    }
    function demo()
    {
    return view('frontend.demo');
    }
}
