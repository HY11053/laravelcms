<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Ask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    public function Index()
    {
        //l零食品牌
        $lingshibrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',1)->take(3)->latest()->get();
        $lingshibrandls=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',1)->skip(3)->take(5)->latest()->get();
        //炒货品牌
        $chaohuobrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',3)->take(3)->latest()->get();
        $chaohuobrandls=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',3)->skip(3)->take(5)->latest()->get();
        //干果品牌
        $ganguobrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',4)->take(3)->latest()->get();
        $ganguobrandls=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',4)->skip(3)->take(5)->latest()->get();
        $jinkoubrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',5)->take(3)->latest()->get();
        $jinkoubrandls=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',5)->skip(3)->take(5)->latest()->get();
        //最新品牌
        $newbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[1,3,4,5])->take(3)->latest()->get();
        $newbrandls=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[1,3,4,5])->skip(3)->take(5)->latest()->get();
        //资讯
        $newsarticles=Archive::where('typeid',2)->take(8)->latest()->get();
        //问答
        $asks=Ask::where('is_hidden',1)->take(8)->get();
        return view('mobile.index',compact('lingshibrands','lingshibrandls','chaohuobrands','chaohuobrandls',
            'ganguobrands','ganguobrandls','jinkoubrands','jinkoubrandls','newbrands','newbrandls','newsarticles','asks'));
    }
}
