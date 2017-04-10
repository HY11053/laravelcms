<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Answer;
use App\AdminModel\Arctype;
use App\AdminModel\Ask;
use App\Http\Requests\AnswerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    //
    public function Index(Request $request)
    {
        $thistypeinfo=Arctype::where('real_path','ask')->first();
        $asklists=Ask::latest()->paginate(30);
        //dd($pagelists);
        return view('frontend.ask',compact('thistypeinfo','asklists'));
    }
    public function HotAsks()
    {
        $thistypeinfo=Arctype::where('real_path','ask')->first();
        $asklists=Ask::latest()->paginate(10);
        //dd($pagelists);
        $asklists=Ask::where('answernum','>','0')->latest()->paginate(30);
        return view('frontend.ask',compact('thistypeinfo','asklists'));
    }
    public function PendingAsks()
    {
        $thistypeinfo=Arctype::where('real_path','ask')->first();
        $asklists=Ask::where('answernum','0')->latest()->paginate(30);
        //dd($pagelists);
        return view('frontend.ask',compact('thistypeinfo','asklists'));

    }
    public  function AskArticle($id)
    {
        $thisaskinfo=Ask::findOrFail($id);
        $thisaskanswers=Answer::where('ask_id',$id)->get();
        return view('frontend.ask_article',compact('thisaskinfo','thisaskanswers'));
    }
}
