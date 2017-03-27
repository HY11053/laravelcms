<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\CommentReversion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentReversionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function CommentReversion(Request $request,$id)
    {
        $request['archive_id']=$id;
        $request['comment_id']=$request['parent_id'];
        $request['user_id']=auth('web')->user()->id;
        $request['ip']=$request->getClientIp();
        CommentReversion::create($request->all());
        //dd(CommentReversion::first()->toJson());
        return CommentReversion::first()->toJson();
    }
}
