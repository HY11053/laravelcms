<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    public function PostComment(Request $request)
    {
        $request['ip']=$request->getClientIp();
        $request['uid']=1;
        Comment::create($request->all());
        return redirect()->back();
    }
}
