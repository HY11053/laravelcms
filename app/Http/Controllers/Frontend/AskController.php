<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Arctype;
use App\AdminModel\Ask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    //
    public function Index(Request $request)
    {
        $thistypeinfo=Arctype::where('real_path','ask')->first();
        $pagelists=Ask::where('is_hidden','0')->latest()->paginate(10);
        //dd($pagelists);
        return view('frontend.ask',compact('thistypeinfo','pagelists'));
    }
}
