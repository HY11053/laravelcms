<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\Http\Requests\CreateArticleRequest;
use App\Helpers\UploadImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    function Index()
    {
        return view('admin.article');
    }
    function Create()
    {
        $allnavinfos=Arctype::where('is_write',1)->pluck('typename','id');
        return view('admin.article_create',compact('allnavinfos'));
    }
    //文档创建提交
    function PostCreate(CreateArticleRequest $request)
    {

        $request['litpic']=UploadImages::UploadImage($request);
        $request['aftertime']=new Carbon($request['aftertime']);
        $request['flags']=UploadImages::Flags($request['flags']);
        $request['click']=rand(100,900);
        $request['description']=(!empty($request['description']))?$request['description']:htmlspecialchars(mb_substr($request['body'],0,150));
        $request['write']=auth('admin')->user()->name;
        $request['dutyadmin']=auth('admin')->id();
        //dd($request->all());
        Archive::create($request->all());
    }
}
