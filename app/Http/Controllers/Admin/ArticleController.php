<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Addonarticle;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\Http\Requests\CreateArticleRequest;
use App\Helpers\UploadImages;
use App\Http\Requests\ImagesUploadRequest;
use App\Notifications\ArticlePublishedNofication;
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
    /**
     * 文档列表
     * @param
     *
     * @return
     */
    function Index()
    {
        //$articles = Archive::where('published_at','<=',Carbon::now())->latest()->paginate(30);
        $articles = Archive::latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**
     * 普通文档创建
     * @param
     *
     * @return
     */

    function Create()
    {
        $allnavinfos=Arctype::where('is_write',1)->pluck('typename','id');
        return view('admin.article_create',compact('allnavinfos'));
    }

    /**
     * 品牌文档创建
     * @param
     *
     * @return
     */
    function BrandCreate()
    {
        $allnavinfos=Arctype::where('is_write',1)->pluck('typename','id');
        return view('admin.article_brandcreate',compact('allnavinfos'));
    }

    /**
     * 文档创建提交数据处理
     * @param
     *
     * @return
     */
    function PostCreate(CreateArticleRequest $request)
    {
        if(isset($request['flags']))
        {
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
        $request['jmxq_content']=rand(100,900);
        $request['jmys_content']=rand(100,900);
        $request['jmlc_content']=rand(100,900);
        $request['jmzc_content']=rand(100,900);
        $request['jmask_content']=rand(100,900);
        $request['description']=(!empty($request['description']))?$request['description']:htmlspecialchars(mb_substr($request['body'],0,150));
        $request['write']=auth('admin')->user()->name;
        $request['dutyadmin']=auth('admin')->id();
        Archive::create($request->all());
        Addonarticle::create($request->all());
        auth('admin')->user()->notify(new ArticlePublishedNofication(Archive::latest() ->first()));
        return redirect(action('Admin\ArticleController@Index'));
    }

    /**
     * 文档编辑
     * @param
     *
     * @return
     */
    function Edit($id)
    {
        $allnavinfos=Arctype::where('is_write',1)->pluck('typename','id');
        $pics=explode(',',Addonarticle::where('id',$id)->value('imagepics'));
        //$articleinfos=Archive::find($id);
        $articleinfos=DB::table('archives')->join('addonarticles','archives.id','=','addonarticles.id')->where('addonarticles.id','=',$id)->first();
        if($articleinfos->mid==0)
        {
            return view('admin.article_edit',compact('id','articleinfos','allnavinfos','pics'));
        }else{
            return view('admin.article_brandedit',compact('id','articleinfos','allnavinfos','pics'));
        }

    }

    /**
     * 文档编辑提交处理
     * @param
     *
     * @return
     */
    function PostEdit(CreateArticleRequest $request,$id)
    {

        if(isset($request['flags']))
        {
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
        if (empty($request['imagepics']))
        {
            $request['imagepics']=' ';
        }
        Archive::findOrFail($id)->update($request->all());
        Addonarticle::findOrFail($id)->update($request->all());
        return redirect(action('Admin\ArticleController@Index'));
    }
    /**
     * 当前用户发布的文档
     * @param
     *
     * @return
     */
    function OwnerShip()
    {
        $articles = Archive::where('published_at','<=',Carbon::now())->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**
     * 等待审核的文档
     * @param
     *
     * @return
     */
    function PendingAudit()
    {
        $articles = Archive::where('published_at','<=',Carbon::now())->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**
     * 等待发布的文档
     * @param
     *
     * @return
     */
    function PedingPublished(){
        $articles = Archive::where('published_at','>',Carbon::now())->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**
     * 文档预览
     * @param
     *
     * @return
     */
    function PreViewArticle($id){
        $articleinfos=DB::table('addonarticles')->join('arctypes','addonarticles.typeid','=','arctypes.id')->join('archives','addonarticles.id','=','archives.id')->where('addonarticles.id','=',$id)->first();
        return view('admin.article_preview',compact('articleinfos'));
    }

    /**
     * 文档删除
     * @param
     *
     * @return
     */
    function DeleteArticle($id)
    {
        Archive::where('id',$id)->delete();
        Addonarticle::where('id',$id)->delete();
        return '删除成功';

    }
    /**
     * 文档搜索
     * @param
     *
     * @return
     */
    function PostArticleSearch(Request $request)
    {
        $articles=Archive::where('title','like',$request->input('title'))->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**
     * 图集上传处理
     * @param
     *
     * @return
     */
    function UploadImages(ImagesUploadRequest $request){
        UploadImages::UploadImage($request);
    }
}
