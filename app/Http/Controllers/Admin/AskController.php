<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Ask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    //问答列表
    function Index()
    {
        $asklists=Ask::all();
        return view('admin.ask',compact('asklists'));
    }
    //添加问题
    function Add()
    {
        return view('admin.askadd');
    }
    //问题创建提交
    function PostAdd(Request $request){
        $request['ip']=$request->getClientIp();
        $request['user_id']=1;
        //dd($request->all());
       Ask::create($request->all());
    }
    //编辑问题
    //编辑创建提交
    //删除问题
}
