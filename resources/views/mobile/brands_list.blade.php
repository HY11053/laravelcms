@extends('mobile.mobile')
@section('main_content')
    <!--列表开始-->
    <div class="brand_list">
        <ul>
            @foreach($pagelists as $brand)
            <li>
                <div class="img_show"><a href="/{{$brand->arctype->real_path}}/{{$brand->id}}.shtml"><img src="{{$brand->litpic}}" alt="{{$brand->article->brandname}}"/></a></div>
                <div class="cont">
                    <p class="tit"><a href="/{{$brand->arctype->real_path}}/{{$brand->id}}.shtml">{{$brand->article->brandname}}</a></p>
                    <p class="price">基本投资：<em>{{$brand->article->brandpay}}</em></p>
                    <p class="info">所在地区：{{$brand->article->brandaddr}}</p>
                    <p class="btn"><a href="#" class="btn_ask">加盟咨询</a><a href="#" class="btn_intro">品牌介绍</a></p>
                </div>
            </li>
           @endforeach
        </ul>

        <!--分页开始-->
    {{$pagelists->links()}}
        <!--分页开始-->
    </div>
    <!--内容结束-->
@stop