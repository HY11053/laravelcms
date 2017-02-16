<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Arctype;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    function Index(){
        $topnavs=Arctype::where('reid',0)->pluck('typename','id');
        foreach ($topnavs as $key=>$topnav)
        {
        $sons=$this->getSontype($key);

        }
        dd($sons);
        //dd($topnavs);
        return view('admin.category',compact('topnavs'));
    }

    function Create($id=0){
        $thisnavinfos=Arctype::find($id);
        $allnavinfos=Arctype::pluck('typename','id');
        $topid=empty(Arctype::where('id',$id)->value('topid'))?$thisnavinfos->id:Arctype::where('id',$id)->value('topid');
        //dd($topid);
        return view('admin.category_create',compact('id','thisnavinfos','allnavinfos','topid'));
    }

    function PostCreate(StoreCategoryRequest $request){
        //;
        $requestdata=$request->all();
        if(array_key_exists('image',$requestdata))
        {
            $requestdata['litpic']=$this->UploadImage($request);
        }else{
            $requestdata['litpic']='';
        }
        if($requestdata['dirposition']==1)
        {
            $requestdata['realpath']=$requestdata['typedir'];
        }else
        {
            $requestdata['realpath']=$requestdata['typedir'];
        }
        //dd($request->all());
        Arctype::create($requestdata);


    }
    //图片上传
    function UploadImage($request){
        if(!$request->hasFile('image')){
            return $img_relpath='';
        }
        $file = $request->file('image');
        //判断文件上传过程中是否出错
        $allowed_extensions = ["png", "jpg", "gif"];
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            exit(['error' => 'You may only upload png, jpg or gif.']);
        }
        $upload_path='images/thread'.date('/Y/m/d',time());
        $destinationPath =public_path($upload_path);
        $extension = $file->getClientOriginalExtension();
        $fileName = md5(str_random(10)).'.'.$extension;
        $file->move($destinationPath, $fileName);
        $img_relpath='/images/thread/'.date('Y/m/d/',time()). $fileName;
        return $img_relpath;
    }
    /*
     * 递归查询当前栏目子栏目
     */
    function getSontype($id)
    {

        $sons=Arctype::where('reid',$id)->pluck('typename','id');
        foreach ($sons as $key=>$son){
            $sons[]=empty(!$this->getSontype($key))?$this->getSontype($key):'';
        }
            return $sons;
    }
}

