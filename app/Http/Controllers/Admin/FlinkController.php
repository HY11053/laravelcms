<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\flink;
use App\Http\Requests\FlinkValidationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlinkController extends Controller
{
    //友情链接列表
    function Index()
    {
        $links=flink::all();
        return view('admin.flink',compact('links'));
    }
    //创建友情链接
    function CreateFlink()
    {
        return view('admin.flink_create');
    }
    //友情数据提交处理
    function PostCreateFlink(FlinkValidationRequest $request)
    {
        //dd($request->all());
        flink::create($request->all());


    }
    //友情链接编辑
    function EditFlink($id)
    {
        $thislink=flink::find($id);
        return view('admin.flink_edit',compact('thislink'));
    }
    //友情链接编辑提交处理
    function PostEditFlink(FlinkValidationRequest $request,$id)
    {
        //dd($request->all());
        flink::find($id)->update($request->all());

    }
    //删除友情链接
    function DeleteFlink($id)
    {
        flink::find($id)->delete();
    }
}
