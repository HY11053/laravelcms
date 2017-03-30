<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function AnswerLists()
    {
        $answerlists=Answer::paginate(30);
        return view('admin.answerlists',compact('answerlists'));
    }
    public function AnswerPending()
    {
        $answerlists=Answer::where('is_hidden',0)->paginate(30);
        return view('admin.answerlists',compact('answerlists'));
    }
}
