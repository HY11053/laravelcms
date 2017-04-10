<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Addonarticle;
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
    function demo(){
        for($i=1;$i<Archive::max('id');$i++)
        {
            if(Archive::find($i))
            {
              $description=str_limit(mb_ereg_replace('^(　| )+','', preg_replace('/\r|\n/', '', trim(strip_tags(htmlspecialchars_decode(Addonarticle::where('id',$i)->value('body')))))), $limit = 300, $end = '');

              Archive::where('id',$i)->update(['description'=>$description]);

            }
        }
    }
}

