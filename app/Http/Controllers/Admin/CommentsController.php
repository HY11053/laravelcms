<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
   function index()
   {
       $comments=Comment::latest()->paginate(10);
       return view('admin.comments',compact('comments'));

   }
    public function Pending ()
    {
        $comments=Comment::where('is_hidden',0)->latest()->paginate(10);
        return view('admin.comments',compact('comments'));
    }
}
