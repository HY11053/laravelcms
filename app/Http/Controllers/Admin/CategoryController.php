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
            if(!empty(Arctype::where('reid',$key)->pluck('typename','id')->toArray())){
                $sons[$key]=$this->getSontype($key);
            }


        }
        //dd($sons);
        //dd($topnavs);
        return view('admin.category',compact('topnavs','sons'));
    }
    /*
  * 递归查询当前栏目子栏目
  */
    function getSontype($id)
    {
        $typeinfos=Arctype::where('reid',$id)->pluck('typename','id')->toArray();
        if(!empty($typeinfos)){
            foreach ($typeinfos as $key=>$son){

                if(!empty($this->getSontype($key))){
                    $sons[$key]['list']=$son;
                    $sons[$key]['next']=$this->getSontype($key);
                }else{
                    $sons[$key]=$son;
                }
            }

            return $sons;
        }


    }

    /*
     * 栏目创建
     */
    function Create($id=0){
        $thisnavinfos=Arctype::find($id);
        $allnavinfos=Arctype::pluck('typename','id');
        if($id!=0){
            $topid=empty(Arctype::where('id',$id)->value('topid'))?$thisnavinfos->id:Arctype::where('id',$id)->value('topid');
        }

        //dd($topid);
        return view('admin.category_create',compact('id','thisnavinfos','allnavinfos','topid'));
    }
    /*
     * 栏目创建数据提交处理
     */

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

    /*
     *
     * 图片上传
     *
     */
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

