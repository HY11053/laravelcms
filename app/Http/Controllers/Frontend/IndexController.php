<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        return view('frontend.index');
    }
    function demo()
    {
    return view('frontend.demo');
    }
}
