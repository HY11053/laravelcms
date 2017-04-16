@extends('mobile.mobile')
@section('main_content')
    <!--内容开始-->
    <div class="brand_detail">
        <div class="hd">
            <div class="img_show"><img src="{{$thisarticleinfos->litpic}}" alt="{{$thisarticleinfos->title}}"/></div>
            <div class="cont">
                <p class="tit">{{$thisarticleinfos->article->brandname}}</p>
                <p class="price">基本投资：<em>{{$thisarticleinfos->article->pay}}</em></p>
                <p class="info">加盟模式：单店加盟</p>
            </div>
        </div>

        <div class="brand_company">
            <p><strong>公司名称：</strong>{{$thisarticleinfos->article->brandgroup}}</p>
            <p><strong>联系电话：</strong>400-881-3178</p>
            <p><strong>公司地址：</strong>{{$thisarticleinfos->article->brandaddr}}</p>
        </div>

        <div class="brand_cont">
            {!! $thisarticleinfos->article->body !!}
      </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article->jmxq_content !!}
        </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article->jmys_content !!}
        </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article->jmlc_content !!}
        </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article->jmzc_content !!}
        </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article->jmask_content !!}
        </div>

        <!--按钮-->
        <div class="index_btn" > <a href="#" class="btn_2">开店咨询</a> <a href="#" class="btn">索取资料</a> </div>
        <!--按钮-->

    </div>
@stop
