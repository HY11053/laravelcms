@extends('frontend.frontend')
@section('title') {{$thistypeinfo->title}}@stop
@section('keywords') {{$thistypeinfo->keywords}} @stop
@section('description')  {{$thistypeinfo->description}}  @stop
@section('headlibs')
    <link rel="stylesheet" type="text/css" href="/reception/css/global.css"/>
    <link rel="stylesheet" type="text/css" href="/reception/css/news.css"/>
    <link rel="stylesheet" type="text/css" href="/reception/css/ask.css"/>
@stop
@section('main_content')
    <div class="bn1190"><a href="#" target="_blank"><img src="/reception/images/temp/bn5.jpg" alt=""/></a></div>
    <div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">11111111111零售行业资讯</a></div>

    <!--主体开始-->
    <div class="main clearfix">
        <div class="center_list clearfix">
            <!--左边内容开始-->
            <div id="news_center">

                <div class="ww_330">

                        <div class="container">
                            <div class="row mb20">
                                <div class="col-xs-12 col-md-9 main" id="nopadding">
                                    <ul class="nav nav-tabs nav-tabs-zen mb10 mt30" style="background: none;">
                                        <li @if(Request::getRequestUri()=='/ask')class="active"@endif ><a href="/ask">最新问答</a>
                                        </li>
                                        <li @if(Request::getRequestUri()=='/ask/hot')class="active"@endif ><a  href="/ask/hot">热门问答</a></li>
                                        <li @if(Request::getRequestUri()=='/ask/pending')class="active"@endif ><a href="/ask/pending">等待回答</a></li>
                                        <li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="#">我要提问</a></li>
                                         </ul>
                                    <div class="stream-list question-stream">
                                        @foreach($asklists as $asklist)
                                        <section class="stream-list__item">
                                            <div class="qa-rank">
                                                <div class="votes hidden-xs">
                                                    {{$asklist->goodpost}}<small>得票</small>
                                                </div>
                                                <div class="answers @if($asklist->answernum >0) answered @endif @if($asklist->mid==1) solved @endif">
                                                    {{$asklist->answernum}}<small>@if($asklist->mid==1) 解决 @else 回答 @endif</small>
                                                </div>
                                                <div class="views hidden-xs @if($asklist->viewnum>90) viewsword100to999 @endif">
                                                    <span >{{$asklist->viewnum}}</span>
                                                    <small>浏览</small>
                                                </div>
                                            </div>
                                            <div class="summary">
                                                <ul class="author list-inline">
                                                    <li>
                                                        <a href="/u/yunyu2019">{{$asklist->user->name}}</a>
                                                        <span class="split"></span>
                                                        <a href="/q/1010000008866561/a-1020000008871022">{{\Carbon\Carbon::parse($asklist->created_at)->diffForHumans()}}</a>
                                                    </li>
                                                </ul>
                                                <h2 class="title"><a href="/q/1010000008866561">{{$asklist->title}}</a></h2>
                                                <ul class="taglist--inline ib">
                                                    <li class="tagPopup">
                                                        <a class="tag tag-sm" href="">{{$asklist->tags}}</a>
                                                    </li>
                                                    <li class="tagPopup">
                                                        <a class="tag tag-sm" href="" >{{$asklist->tags}}</a>
                                                    </li>
                                                    <li class="tagPopup">
                                                        <a class="tag tag-sm" >{{$asklist->tags}}</a>
                                                    </li>
                                                    <li class="tagPopup">
                                                        <a  class="tag tag-sm" href="">{{$asklist->tags}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                        @endforeach

                                    </div><!-- /.stream-list -->

                                    <div class="text-center">
                                       {!! $asklists->links() !!}
                                    </div>
                                </div><!-- /.main -->

                                <div class="new_right col-md-3">
                                    <!--搜索开始-->
                                    <div class="new_bt">
                                        <div class="search_bc">
                                            <form  method="get">
                                                <input type="text"  class="new_input"  name="search">
                                                <input type="submit" class="new_btn" value="搜索">
                                            </form>
                                        </div>
                                        <!--搜索结束-->
                                    </div>
                                    <div class="new_bt">
                                        <h3> <i></i> 本周热门 </h3>
                                        <div class="new_hotes">
                                            <ul>

                                            </ul>
                                        </div>
                                    </div>

                                    <!--快速查询入口-->
                                    <div class="new_bt">
                                        <h3><i></i>快速查询入口</h3>
                                        <div class="kuishurk">
                                            <a href="#">智能电视</a>
                                            <a href="#">电视盒子</a>
                                            <a href="#">开箱晒物</a>
                                            <a href="#">智能电视</a>
                                            <a href="#">VR</a>
                                            <a href="#">智能电视</a>
                                            <a href="#">电视盒子</a>
                                            <a href="#">开箱晒物</a>
                                            <a href="#">智能电视</a>
                                            <a href="#">电视盒子</a>
                                            <a href="#">开箱晒物</a>
                                            <a href="#">智能电视</a>
                                            <a href="#">VR</a>
                                            <a href="#">智能电视</a>
                                            <a href="#">电视盒子</a>
                                            <a href="#">开箱晒物</a>
                                        </div>
                                    </div>

                                </div>
                                <!--右边结束-->
                            </div> <!-- news__item 结束 -->
                        </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
    <!--主体结束-->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">问题提问</h4>
                </div>
                <from onsubmit:return false;>
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="title" class="control-label col-md-2 col-sm-3 col-xs-12">提问标题</label>
                        <div class="col-md-8 col-sm-9 col-xs-12">
                            <input class="form-control col-md-10" id="answertitle" placeholder="请输入您要提问的问题" name="title" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="tags" class="control-label col-md-2 col-sm-3 col-xs-12">问题标签</label>
                        <div class="col-md-8 col-sm-9 col-xs-12">
                            <input class="form-control col-md-10" id="tags" placeholder="多个标签用,分隔" name="tags" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="brandgroup" class="control-label col-md-2 col-sm-3 col-xs-12">问题描述</label>
                        <a href="#">问答描述</a>问答内容编辑
                        <div class="col-md-offset-1 col-md-10">
                        @include('vendor.ueditor.assets')
                        <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var ue = UE.getEditor('container',{
                                    toolbars: [
                                        ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright']
                                    ],
                                    elementPathEnabled: false,
                                    enableContextMenu: false,
                                    autoClearEmptyNode:true,
                                    wordCount:false,
                                    imagePopup:false,
                                    initialFrameHeight:150,
                                    autotypeset:{ indent: true,imageBlockLine: 'center' }
                                });
                                ue.ready(function() {
                                    ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                });
                            </script>

                            <!-- 编辑器容器 -->
                            <script id="container" name="body" type="text/plain"></script>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button"  id="sub_answer" class="btn btn-primary">提交问题</button>
                </div>
                </from>
                @if(count($errors) > 0)
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

    </div>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#sub_answer").click(function(){
                var auth="{{Auth::check()}}";
                var body=  ue.getContent();
                var tags=$('#tags[name="tags"]').val();
                var title=$('#answertitle[name="title"]').val();
                if(!auth.length == 0){
                    $.ajax({
                        //提交数据的类型 POST GET
                        type:"POST",
                        //提交的网址
                        url:"/questions/add",
                        //提交的数据
                        data:{"title":title,"tags":tags,"body":body},
                        //返回数据的格式
                        datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                        success:function (response, stutas, xhr) {
                            alert(response);
                            window.location.href='/ask';
                        }
                    });
                } else{
                    window.location.href='/login';
                }
            })






        })

    </script>

@stop