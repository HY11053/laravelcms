<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    function Index(){
        return view('admin.category');
    }

    function Create(){
        return view('admin.category_create');
    }

    function PostCreate(Request $request){
        dd($request->all());
    }
}

