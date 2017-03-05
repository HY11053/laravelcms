<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRegsiterRequest;
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
        $userlists=User::all();
        return view('admin.userlist',compact('userlists'));
    }
    function UserAdd(){
        echo '后台暂时不注册用户!，请从前台注册';
    }
    //前台用户更改编辑
    function UserEdit($id)
    {
        $User=User::find($id);
        return view('admin.useredit',compact('User'));

    }
    //前台会员用户编辑提交处理
    function PostUserEdit(UserRegsiterRequest $request,$id)
    {
        User::find($id)->update($request->all());
        return redirect(action('Admin\FrontUserController@Index'));
    }
    function UserDelete($id)
    {
        User::find($id)->delete();
        return redirect(action('Admin\FrontUserController@Index'));

    }
}
