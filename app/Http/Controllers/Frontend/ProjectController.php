<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Addonarticle;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
   public function Search(Request $request,$p1=[],$p2='',$p3='',$p4='')
   {

       $p1=$p1==0?Arctype::where('mid','1')->pluck('id'):array($p1);
       $p2=empty($p2)?'':$p2;
       $p3=empty($p3)?'':$p3;
        $p4=empty($p4)?'':Area::where('id',$p4)->value('city');
        $pagelists=Addonarticle::whereIn('typeid',$p1)->where('brandpay','like','%'.$p2.'%')->where('acreage','like','%'.$p3.'%')->where('brandaddr','like','%'.$p4.'%')->where('created_at','<=',Carbon::now())->latest()->paginate(30);
       $topbrands=Archive::where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(9)->get();
       $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
       $brandtypes=Arctype::where('mid',1)->get();
       return view('frontend.project',compact('pagelists','topbrands','newsbrands','brandtypes'));
   }
   public function SearchAjax(Request $request)
   {
       $url=env('APP_URL').'/project/'.$request->input('cname').'-'. str_replace('万','',$request->input('brandpay')).'-'.str_replace('平米','',$request->input('acreage')).'-0.shtml';
       return $url;

   }
}
