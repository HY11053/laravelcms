<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
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
            return view('frontend.brand_article',compact('thisarticleinfos'));
        }
    }
}
