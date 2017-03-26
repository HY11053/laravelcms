<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    //
    public function BrandLists(Request $request,$path)
    {
        //判断当前栏目类型并返回给定视图及数据
        if(Arctype::where('real_path',$path)->value('mid')==1)
        {
            $pagelists=Archive::where('typeid',Arctype::where('real_path',$request->path())->value('id'))->where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate(10);
            $topbrands=Archive::where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(9)->get();
            $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
            $brandtypes=Arctype::where('mid',1)->get();
            $thistypeinfo=Arctype::where('real_path',$path)->first();
            return view('frontend.brands',compact('pagelists','topbrands','newsbrands','brandtypes','thistypeinfo'));
        }else{

            if(Arctype::where('real_path',$path)->value('id')==null)
            {
                abort(404);
            }
            $pagelists=Archive::where('typeid',Arctype::where('real_path',$request->path())->value('id'))->where('mid','<>',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate(10);
            $topnews=Archive::where('mid','<>',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(5)->get();
            $thistypeinfo=Arctype::where('real_path',$path)->first();
            return view('frontend.lists',compact('pagelists','topnews','newsbrands','thistypeinfo'));
        }

    }
}
