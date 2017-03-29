@extends('frontend.frontend')
@section('title') 问答中心@stop
@section('keywords') 问答中心 @stop
@section('description') 问答中心  @stop
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
                                    <div class="row">
                                        {{Form::open(array('route' => 'ask_create','files' => true,))}}
                                        <div class="col-md-12">
                                            <!-- The time line -->
                                            <ul class="timeline">

                                                <li>
                                                    <div class="timeline-item">
                                                        <div class="timeline-body basic_info">
                                                            <div class="form-group col-md-12">
                                                                {{Form::label('title', '问答标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                                                <div class="col-md-4 col-sm-9 col-xs-12">
                                                                    {{Form::text('title', null, array('class' => 'form-control','id'=>'title','placeholder'=>'问答标题'))}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <i class="fa fa-file-text bg-maroon"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

                                                        <h3 class="timeline-header"><a href="#">问答描述</a>问答内容编辑</h3>

                                                        <div class="timeline-body">
                                                        @include('vendor.ueditor.assets')
                                                        <!-- 实例化编辑器 -->
                                                            <script type="text/javascript">
                                                                var ue = UE.getEditor('container',{
                                                                    toolbars: [
                                                                        ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',   'insertimage', 'fullscreen']
                                                                    ],
                                                                    elementPathEnabled: false,
                                                                    enableContextMenu: false,
                                                                    autoClearEmptyNode:true,
                                                                    wordCount:false,
                                                                    imagePopup:false,
                                                                    autotypeset:{ indent: true,imageBlockLine: 'center' }
                                                                });
                                                                ue.ready(function() {
                                                                    ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                                                });
                                                            </script>

                                                            <!-- 编辑器容器 -->
                                                            <script id="container" name="body" type="text/plain"></script>
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <button type="submit"  class="btn btn-md bg-maroon">提交问答</button>
                                                        </div>
                                                    </div>
                                                </li>

                                                <!-- END timeline item -->
                                                <li>
                                                    <i class="fa fa-clock-o bg-gray"></i>
                                                </li>
                                            </ul>

                                        </div>
                                        <!-- /.col -->
                                        {!! Form::close() !!}
                                    </div>
                                    @if(count($errors) > 0)
                                        <ul class="alert alert-danger">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
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
@stop