<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Ask;
use App\Http\Requests\AnswerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Add(AnswerRequest $request)
    {
        $request['user_id']=auth('web')->user()->id;
        $request['ip']=$request->getClientIp();
        Ask::create($request->all());
        return '问题提交成功';

    }
}
