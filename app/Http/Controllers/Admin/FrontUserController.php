<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontUserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    function Index(){
        $adminlists=User::all();
        return view('admin.adminlist',compact('adminlists'));
    }
}
