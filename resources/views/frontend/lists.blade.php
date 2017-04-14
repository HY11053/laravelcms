@extends('frontend.frontend')
@section('title') {{$thistypeinfo->title}}@stop
@section('keywords') {{$thistypeinfo->keywords}} @stop
@section('description')  {{$thistypeinfo->description}}  @stop
@section('headlibs')
    <link rel="stylesheet" type="text/css" href="/reception/css/news.css"/>
@stop
@section('main_content')
    @include('frontend.position')

<!--主体开始-->
<div class="main clearfix">
    <div class="center_list clearfix">
        <!--左边内容开始-->
        <div class="news_center">

            <div class="ww_330">
                @foreach($pagelists as $pagelist)
                <dl>
                    <dt><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank"><img src="{{$pagelist->litpic}}"  alt="{{$pagelist->title}}"/></a></dt>
                    <dd class="tit"> <a class="cate" href="/{{$pagelist->arctype->real_path}}/">零食资讯</a> <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank" title="ces">{{$pagelist->title}}</a> </dd>
                    <dd class="teg"> <a href="#" target="_blank">测试</a> <a href="#" target="_blank">吉祥混沌</a> </dd>
                    <dd class="desc">{{$pagelist->description}} </dd>
                    <dd class="date">发布于：<span>{{$pagelist->updated_at}} </span> <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->title}}">阅读全文&gt;&gt;</a></dd>
                </dl>
                @endforeach

            </div>

            <!--分页 开始-->

            <div class="page">
                {!! $pagelists->links() !!}
            </div>

            <!--分页 结束-->
        </div>

        <!--左边内容结束-->

        <!--右边开始-->

        <div class="new_right">
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
                        @foreach($topnews as $topnew)
                        <li > <a href="/{{$topnew->arctype->real_path}}/{{$topnew->id}}.shtml" target="_blank" title="{{$topnew->title}}"><img src="{{$topnew->litpic}}" alt="{{$topnew->title}}" ></a>
                            <p><a  href="/{{$topnew->arctype->real_path}}/{{$topnew->id}}.shtml" title="{{$topnew->title}}">{{$topnew->title}}</a></p>
                            <p></p>
                        </li>
                        @endforeach
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

    </div>
</div>
<!--主体结束-->
@stop