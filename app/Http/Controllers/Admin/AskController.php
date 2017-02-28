<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    //问答列表
    function Index()
    {
        
    }
    //添加问题
    function Add()
    {
        return view('admin.askadd');
    }
    //问题创建提交
    //编辑问题
    //编辑创建提交
    //删除问题
}
