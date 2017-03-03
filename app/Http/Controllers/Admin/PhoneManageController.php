<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Phonemanage;
use App\Http\Requests\PhoneManageRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneManageController extends Controller
{
    //电话提交管理列表
    function Index()
    {
        $phoneNos=Phonemanage::latest()->paginate(30);
        return view('admin.phonelists',compact('phoneNos'));
        
    }
    public function CreatePhoneManage (PhoneManageRequest $request){
        $request['ip']=$request->getClientIp();
        Phonemanage::create($request->all());
        return redirect(action('Admin\phone\PhoneManageController@Index'));
    }
    function PhoneManageEdit($id){
        $thisPhoneInfo=Phonemanage::findOrFail($id);
        return view('admin.phoneinfoedit',compact('thisPhoneInfo'));
    }
    function PhoneManageEditPost(PhoneManageRequest $request,$id){
        $thisPhoneInfo=Phonemanage::findOrFail($id)->update($request->all());
        return view('admin.phoneinfoedit',compact('thisPhoneInfo'));
    }
    function DeletePhone($id)
    {
        echo '暂时不给删除';

    }
}
