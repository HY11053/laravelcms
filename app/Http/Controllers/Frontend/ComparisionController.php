<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComparisionController extends Controller
{

    function Compare($p1=0,$p2=0,$p3=0)
    {
        $cbrand1=Archive::find($p1);
        $cbrand2=Archive::find($p2);
        $cbrand3=Archive::find($p3);
        return view('frontend.pk',compact('cbrand1','cbrand2','cbrand3'));
    }
}
