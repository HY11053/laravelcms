<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandArticleController extends Controller
{
    //
    function BrandArticle(Request $request,$id)
    {
        preg_match('/[a-zA-Z]+/',$request->path(),$matchs);
        if (Archive::findOrFail($id)->arctype->real_path!=$matchs[0])
        {
            abort(404);
        }else{
            $thisarticleinfos=Archive::findOrFail($id);
            $topbrands=Archive::where('mid',1)->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
            $latestbrands=Archive::where('mid',1)->where('published_at','<=',Carbon::now())->latest()->take(20)->get();
            return view('frontend.brand_article',compact('thisarticleinfos','topbrands','latestbrands'));
        }
    }
}
