<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    function Index()
    {
        return view('admin.article');
    }
    function Create()
    {
        return view('admin.article_create');
    }
    function PostCreate(Request $request)
    {
        dd($request->all());
    }
}
