<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Admin;
use App\AdminModel\Phonemanage;
use App\Events\PhoneEvent;
use App\Http\Requests\PhoneManageRequest;
use App\Notifications\MailSendNotification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneManageController extends Controller
{
   
    //电话提交管理列表
    function Index()
    {
        $notifications=array();
        $phoneNos=Phonemanage::latest()->paginate(30);
        return view('admin.phonelists',compact('phoneNos','notifications'));

    }
    public function CreatePhoneManage (PhoneManageRequest $request){
        $request['ip']=$request->getClientIp();
        Phonemanage::create($request->all());
        event(new PhoneEvent(Phonemanage::latest() ->first()));
        Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));        
        return redirect()->back();
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
