<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Phonemanage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneManageController extends Controller
{
    //
    function Index()
    {
        $phoneNos=Phonemanage::latest()->paginate(30);
        return view('admin.phonelists',compact('phoneNos'));
        
    }
}
