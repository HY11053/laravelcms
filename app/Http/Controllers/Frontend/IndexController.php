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
        //创业好店
        $cybrands=Archive::where('flags','like','%'.'s'.'%')->where('mid','1')->whereIn('typeid',[1,3,4,5])->take(8)->latest()->get();
        $cysbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[1,3,4,5])->take(11)->orderBy('click','desc')->get();
        $cybsbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[1,3,4,5])->skip(11)->take(8)->orderBy('click','desc')->get();
        //零食品牌
        $latestlingshibrands=Archive::where('mid','1')->whereIn('typeid',[1])->take(27)->latest()->get();
        $latestrlingshibrands=Archive::where('mid','1')->whereIn('typeid',[1])->take(30)->latest()->get();
        //炒货品牌
        $latestchaohuobrands=Archive::where('mid','1')->whereIn('typeid',[3])->take(27)->latest()->get();
        $latestrchaohuobrands=Archive::where('mid','1')->whereIn('typeid',[3])->take(30)->latest()->get();
        //进口零食
        return view('frontend.index',compact('lingshibrands','chaohuobrands','ganguobrands',
            'jinkoubrands','cybrands','cysbrands','cybsbrands','latestlingshibrands','latestrlingshibrands','latestchaohuobrands','latestrchaohuobrands'));
    }
    function demo()
    {
    return view('frontend.demo');
    }
}
