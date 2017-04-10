<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Ask;
use App\AdminModel\flink;
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
        $latestrlingshibrands=Archive::where('mid','1')->whereIn('typeid',[1])->skip(27)->take(30)->latest()->get();
        //炒货品牌
        $latestchaohuobrands=Archive::where('mid','1')->whereIn('typeid',[3])->latest()->take(27)->get();
        $latestrchaohuobrands=Archive::where('mid','1')->whereIn('typeid',[3])->latest()->skip(27)->take(18)->latest()->get();
        //进口零食
        $latestjinkoubrands=Archive::where('mid','1')->whereIn('typeid',[5])->latest()->take(27)->get();
        $latestrjinkoubrands=Archive::where('mid','1')->whereIn('typeid',[5])->latest()->skip(27)->take(18)->latest()->get();
        //大家都在看
        $seesbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[1.3,4,5])->take(3)->orderBy('click','desc')->get();
        $seesrbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[1.3,4,5])->skip(3)->take(5)->orderBy('click','desc')->get();
        //生意 大讲堂
        $askrows=Ask::where('is_hidden','1')->take(3)->get();
        //创业大讲堂
        $recommendnews=Archive::where('flags','like','%'.'c'.'%')->where('mid','<>','1')->latest()->take(2)->orderBy('published_at','desc')->get();
        $latesnews=Archive::where('mid','<>','1')->latest()->take(6)->orderBy('published_at','desc')->get();
        //人群解读
        $crowdnews=Archive::where('mid','<>','1')->latest()->skip(6)->take(6)->orderBy('published_at','desc')->get();
        //展会信息
        $zhbrands=Archive::latest()->whereIn('typeid',[8])->orderBy('published_at','desc')->take(8)->get();
        //友情链接
        $flinks=flink::latest()->orderBy('created_at','desc')->take(30)->get();
        return view('frontend.index',compact('lingshibrands','chaohuobrands','ganguobrands',
            'jinkoubrands','cybrands','cysbrands','cybsbrands','latestlingshibrands','latestrlingshibrands','latestchaohuobrands',
            'latestrchaohuobrands','latestjinkoubrands','latestrjinkoubrands','seesbrands','seesrbrands','recommendnews','latesnews','crowdnews','zhbrands','flinks','askrows'));
    }
    function demo()
    {
    return view('frontend.demo');
    }
}
