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
        $topnavs=Arctype::where('reid',0)->pluck('typename','id')->toArray();
        //dd($topnavs);
        foreach ($topnavs as $typeid=>$topnav)
        {
            if(!empty(Arctype::where('reid',$typeid)->pluck('typename','id')->toArray())){
                $topnavs=$this->RecursiveItems($typeid);
                //print_r($topnavs);
            }
        }

        return view('admin.category',compact('topnavs'));
    }
    /*
     * 递归调用当前栏目子栏目
     */
    function RecursiveItems($typeid){

        /*$topnavs[$typeid]=[];
        foreach ($topnavs as $topnav){
            $topnavs[$typeid]['typename']=[$typeid=>$topnav];
            $topnavs[$typeid]['next']=Arctype::where('reid',$typeid)->pluck('typename','id')->toArray();
            dd($topnavs[$typeid]['next']);
        }*/
        $topnavs[$typeid]=[];
        if(!empty(Arctype::where('reid',$typeid)->pluck('typename','id')->toArray()))
        {
            $typeinfos=Arctype::where('reid',$typeid)->pluck('typename','id')->toArray();
        }
        foreach ($typeinfos as $key=>$thistypeinfo){
            if(!empty(Arctype::where('reid',$key)->pluck('typename','id')->toArray()))
            {
                $typeinfos[$key]=$this->RecursiveItems($key);
            }
            //
        }
        dd($typeinfos);


        //return $topnavs;

    }
    function PostCreate(StoreCategoryRequest $request){

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

}

