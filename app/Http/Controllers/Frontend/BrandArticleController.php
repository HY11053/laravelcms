<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandArticleController extends Controller
{
    //
    function BrandArticle(Request $request,$path,$id)
    {
        preg_match('/[a-zA-Z]+/',$request->path(),$matchs);
        if (Archive::findOrFail($id)->arctype->real_path!=$matchs[0])
        {
            abort(404);
        }else{
            if(Archive::findOrFail($id)->mid ==1)
            {
                $thisarticleinfos=Archive::findOrFail($id);
                $topbrands=Archive::where('mid',1)->whereIn('typeid',[1,3,4,5,10])->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $latestbrands=Archive::where('mid',1)->whereIn('typeid',[1,3,4,5,10])->where('published_at','<=',Carbon::now())->latest()->take(20)->get();
                $comments=Comment::where('archive_id',$thisarticleinfos->id)->where('is_hidden',0)->get();
                $latesnews=Archive::where('ismake',1)->where('mid','<>',1)->where('published_at','<=',Carbon::now())->latest()->take(10)->get();
                //dd($comments[0]->reversion);
                $xgsearchs=Archive::where('ismake','1')->where('shorttitle','like','%'.$thisarticleinfos->shorttitle.'%')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                return view('frontend.brand_article',compact('thisarticleinfos','topbrands','latestbrands','comments','latesnews','xgsearchs'));
            }else{
                $thisarticleinfos=Archive::findOrFail($id);
                $topbrands=Archive::where('mid',1)->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $latestbrands=Archive::where('mid',1)->where('published_at','<=',Carbon::now())->latest()->take(20)->get();
                $prev_article = Archive::latest('published_at')->published()->find($this->getPrevArticleId($thisarticleinfos->id));
                $next_article = Archive::latest('published_at')->published()->find($this->getNextArticleId($thisarticleinfos->id));
                $comments=Comment::where('archive_id',$thisarticleinfos->id)->where('is_hidden',0)->get();
                return view('frontend.article_article',compact('thisarticleinfos','prev_article','next_article','topbrands','comments'));
            }

        }
    }
    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->max('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->min('id');
    }
}
