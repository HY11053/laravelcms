<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Admin;
use App\Http\Requests\UserRegsiterRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    //后台用户列表
    function Index(){
        $adminlists=Admin::all();
        return view('admin.adminlist',compact('adminlists'));
    }
    //后台用户注册
    function Register(){
        return view('admin.adminregister',compact('adminlists'));
    }
    //用户注册提交
    function PostRegister(UserRegsiterRequest $request)
    {
        $request['password']=bcrypt($request['password']);
        Admin::create($request->all());
        return redirect(action('Admin\AdminController@Index'));
    }
    //用户编辑
    function Edit($id){
        $adminUser=Admin::find($id);
        return view('admin.adminedit',compact('adminUser'));
    }
    //用户编辑提交
    function PostEdit(UserRegsiterRequest $request,$id)
    {
        $request['password']=bcrypt($request['password']);
        Admin::fild($id)->update($request->all());
        return redirect(action('Admin\AdminController@Index'));
    }
    function Delete($id)
    {
        Admin::find($id)->delete();
        redirect(action('Admin\AdminController@Index'));
        return redirect(action('Admin\AdminController@Index'));
    }
    function Userauth(){
        abort(403);
    }

}
