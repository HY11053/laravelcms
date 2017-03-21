<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    //
    public function BrandLists(Request $request)
    {
       $pagelists=Archive::where('typeid',Arctype::where('real_path',$request->path())->value('id'))->where('ismake','1')->where('published_at','<=',Carbon::now())->latest()->paginate(10);
        return view('frontend.brands',compact('pagelists'));
    }
}
