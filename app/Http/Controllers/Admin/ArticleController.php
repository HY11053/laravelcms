<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Addonarticle;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\Http\Requests\CreateArticleRequest;
use App\Helpers\UploadImages;
use App\Http\Requests\ImagesUploadRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    function Index()
    {
        $articles = Archive::where('published_at','<=',Carbon::now())->latest()->get();
        return view('admin.article',compact('articles'));
    }
    function Create()
    {
        $allnavinfos=Arctype::where('is_write',1)->pluck('typename','id');
        return view('admin.article_create',compact('allnavinfos'));
    }
    //文档创建提交
    function PostCreate(CreateArticleRequest $request)
    {
        if(isset($request['flags'])){
            $request['flags']=UploadImages::Flags($request['flags']);
        }else{
            $request['flags']='';
        }
        if($request['image'])
        {
            $request['litpic']=UploadImages::UploadImage($request);
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }else{
            $request['litpic']='';
        }
       $request['keywords']=$request['keywords']?$request['keywords']:$request['title'];
        $request['click']=rand(100,900);
        $request['description']=(!empty($request['description']))?$request['description']:htmlspecialchars(mb_substr($request['body'],0,150));
        $request['write']=auth('admin')->user()->name;
        $request['dutyadmin']=auth('admin')->id();
        //dd($request->all());
        Archive::create($request->all());
        Addonarticle::create($request->all());
    }

    //文档编辑
    function Edit($id)
    {
        $allnavinfos=Arctype::where('is_write',1)->pluck('typename','id');
        $pics=explode(',',Addonarticle::where('id',$id)->value('imagepics'));
        //$articleinfos=Archive::find($id);
        $articleinfos=DB::table('archives')->join('addonarticles','archives.id','=','addonarticles.id')->where('addonarticles.id','=',$id)->first();
        return view('admin.article_edit',compact('id','articleinfos','allnavinfos','pics'));
//
    }


    //文档编辑提交
    function PostEdit(CreateArticleRequest $request,$id)
    {

        if(isset($request['flags'])){
            $request['flags']=UploadImages::Flags($request['flags']);
        }else{
            $request['flags']='';
    }
        if($request['image'])
        {
            $request['litpic']=UploadImages::UploadImage($request);
            if(empty($request['flags'])){
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }
        $request['description']=(!empty($request['description']))?$request['description']:htmlspecialchars(mb_substr($request['body'],0,150));
        //dd($request->all());
        Archive::findOrFail($id)->update($request->all());
        Addonarticle::findOrFail($id)->update($request->all());
    }
    /*
     * 当前用户发布的文档
     */
    function OwnerShip()
    {
        $articles = Archive::where('published_at','<=',Carbon::now())->where('dutyadmin',auth('admin')->user()->id)->latest()->get();
        return view('admin.article',compact('articles'));
    }
    /*
     * 等待审核的文档
     */
    function PendingAudit()
    {
        $articles = Archive::where('published_at','<=',Carbon::now())->where('ismake','<>',1)->latest()->get();
        return view('admin.article',compact('articles'));
    }
    /*
     * 待发布的文档
     */
    function    PedingPublished(){
        $articles = Archive::where('published_at','>',Carbon::now())->where('dutyadmin',auth('admin')->user()->id)->latest()->get();
        return view('admin.article',compact('articles'));
    }
    /*
     * 文档预览
     */
    function PreViewArticle($id){
        $articleinfos=DB::table('archives')->join('addonarticles','archives.id','=','addonarticles.id')->join('arctypes','archives.typeid','=','arctypes.id')->where('addonarticles.id','=',$id)->first();
        dd($articleinfos);
    }
    /*
     * 删除文章
     */
    function DeleteArticle($id)
    {
        Archive::where('id',$id)->delete();
        Addonarticle::where('id',$id)->delete();
        return '删除成功';

    }
    /*
     * 图集上传
     */
    function UploadImages(ImagesUploadRequest $request){
        UploadImages::UploadImage($request);
    }
}
