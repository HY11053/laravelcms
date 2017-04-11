<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Comment;
use App\Overwrite\Paginator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    //
    public function BrandLists(Request $request,$path,$page=0)
    {
        $cid=$path;
        //判断当前栏目类型并返回给定视图及数据
        if(Arctype::where('real_path',$path)->value('mid')==1)
        {
            $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
            //转换自带分页器为自定义的分页器
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            $topbrands=Archive::where('mid',1)->where('ismake','1')->whereIn('typeid',[1,3,4,5,10])->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(9)->get();
            $newsbrands=Archive::where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
            $brandtypes=Arctype::where('mid',1)->get();
            $thistypeinfo=Arctype::where('real_path',$path)->first();
            $comments=Comment::where('is_hidden',0)->latest()->take(5)->get();

            return view('frontend.brands',compact('pagelists','topbrands','newsbrands','brandtypes','thistypeinfo','comments'));
        }else{

            if(Arctype::where('real_path',$path)->value('id')==null)
            {
                abort(404);
            }
            $pagelists=Archive::where('typeid',Arctype::where('real_path',$path)->value('id'))->where('mid','<>',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
            //转换自带分页器为自定义的分页器
            $pagelists= Paginator::transfer(
                $cid,//传入分类id,
                $pagelists//传入原始分页器
            );
            $topnews=Archive::where('mid','<>',1)->where('ismake','1')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(5)->get();
            $thistypeinfo=Arctype::where('real_path',$path)->first();
            return view('frontend.lists',compact('pagelists','topnews','newsbrands','thistypeinfo'));
        }

    }
}
