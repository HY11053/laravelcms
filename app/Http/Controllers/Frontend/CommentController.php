<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PostComment(Request $request)
    {
        $request['ip']=$request->getClientIp();
        $request['user_id']=auth('web')->user()->id;
        Comment::create($request->all());
        return redirect()->back();
    }

}
