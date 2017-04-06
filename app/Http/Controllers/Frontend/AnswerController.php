<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function AnswerCreate(Request $request,$id)
    {
        $this->validate($request, [
            'content' => 'required|min:100',
        ]);
        $request['ask_id']=$id;
        $request['ip']=$request->getClientIp();
        $request['user_id']=auth('web')->user()->id;
        //dd($request->all());
        Answer::create($request->all());

        return redirect()->back();
    }

}
