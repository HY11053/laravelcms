@extends('mobile.mobile')
@section('main_content')
    <!--内容开始-->
    <div class="list_middle">
        <div class="content_brand">
            <div class="content">
                <h1>{{$thisarticleinfos->title}}</h1>
                <small>时间：{{$thisarticleinfos->published_at}}&nbsp;&nbsp;&nbsp;&nbsp;浏览量:{{$thisarticleinfos->click}}</small>
              {!! $thisarticleinfos->article->body !!}}
            </div>
        </div>
    </div>
    <!--内容结束-->
@stop
