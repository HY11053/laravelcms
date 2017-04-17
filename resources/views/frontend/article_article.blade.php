@extends('frontend.frontend')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('headlibs')
    <meta name="Copyright" content="58零食网-{{env('APP_URL')}}"/>
    <meta name="author" content="58零食网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{env('APP_URL')}}{{Request::getrequesturi()}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" /> <meta property="og:image" content="{{env('APP_URL')}}{{$thisarticleinfos->litpic}}"/>
    <meta property="article:author" content="58零食网" />
    <meta property="article:published_first" content="58零食网, {{env('APP_URL')}}{{Request::getrequesturi()}}" />
    <link rel="stylesheet" type="text/css" href="/reception/css/news.css"/>
@stop
@section('main_content')
@include('frontend.position')
<div class="main clearfix">
    <div class="center_list clearfix">
        <!--左边内容开始-->
        <div class="news_center">
            <!--标题-->
            <div class="ny_message">
                <h1> {{$thisarticleinfos->title}}</h1>
                <div class="ny_message-js"> 时间：{{$thisarticleinfos->published_at}} <span>来源：零食品牌加盟网</span> <span>编辑：{{$thisarticleinfos->write}} </span> </div>
            </div>
            <!--摘要-->
            <div class="new_abstract">
                {!! $thisarticleinfos->description!!}

            </div>
            <!--新闻内容-->
            <div class="body_tit clearfix">
                {!! $thisarticleinfos->article->body !!}
            </div>
            <!--分享-->
            <div class="fenxiang">
                <div class="fenxiangdao">分享到：</div>
                <div class="bdsharebuttonbox" data-tag="share_1">
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                </div>
                <div class="nr_biaoqian"><b>标签：</b>{{$thisarticleinfos->tags}}</div>
            </div>
            <script>
                window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
            </script>
            @include('frontend.comment')
            <!--上一篇-->
            <div class="shangxiapian">
                <p>上一篇：@if(isset($prev_article)) <a href="/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.shtml" title="{{$prev_article->title}}">{{$prev_article->title}}</a> @else 没有了 @endif </p>
                <p >下一篇：@if(isset($next_article)) <a href="/{{$next_article->arctype->real_path}}/{{$next_article->id}}.shtml" title="{{$next_article->title}}">{{$next_article->title}}</a> @else 没有了 @endif </p>
            </div>
            <!--相关资讯-->
            <div class="xg_news">
                <div class="title"><strong>良品铺子资讯</strong></div>
                <div class="xw">
                    <ul class="clearfix">
                        <li><em>2016-06-12</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">家庭主妇选择一扫光零食店加盟收获事业 </a></li>
                        <li><em>2015-09-24</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">全职妈妈选择一扫光休闲食品加盟 重拾</a></li>
                        <li><em>2015-08-31</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">创业选择一扫光休闲食品加盟怎么样</a></li>
                        <li><em>2015-08-18</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">一扫光休闲食品加盟，您的创业首选</a></li>
                        <li><em>2015-06-23</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">选择一扫光零食店加盟，助你实现梦想</a></li>
                        <li><em>2016-06-12</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">家庭主妇选择一扫光零食店加盟收获事业 </a></li>
                        <li><em>2015-09-24</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">全职妈妈选择一扫光休闲食品加盟 重拾</a></li>
                        <li><em>2015-08-31</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">创业选择一扫光休闲食品加盟怎么样</a></li>
                        <li><em>2015-08-18</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">一扫光休闲食品加盟，您的创业首选</a></li>
                        <li><em>2015-06-23</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">选择一扫光零食店加盟，助你实现梦想</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--左边内容结束-->

        <!--右边开始-->
        <div class="new_right">
            <!--排行榜-->
            <div class="new_bt">
                <h3> <i></i> 零售店加盟排行榜 </h3>
                <div class="rank_bd">
                    <ul>
                        @foreach($topbrands as $index=>$topbrand)
                            @if($index==0)
                                <li class="top"> <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->shorttitle}}"><i class="num">{{$index+1}} </i> <img src="{{$topbrand->litpic}}" alt="{{$topbrand->shorttitle}}" ></a>
                                    <div class="cont">
                                        <p><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank">{{$topbrand->shorttitle}}</a></p>
                                        <p><span>投资金额：</span><i>{{$topbrand->article->brandpay}}</i></p>
                                        <p class="btn"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">查看详情</a></p>
                                    </div>
                                </li>
                            @else

                                <li class="top"> <i class="num">{{$index+1}}</i> <span class="name"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->shorttitle}}">{{$topbrand->shorttitle}}</a></span> <span class="price">{{$topbrand->article->brandpay}}</span> </li>
                            @endif

                        @endforeach

                    </ul>
                </div>
            </div>

            <!--新闻-->
            <div class="new_bt">
                <h3> <i></i> 品牌新闻 </h3>
                <div class="bts">
                    <div class="common">
                        <ul>
                            <li><a href="/news/2.shtml" target="_blank" title="ces">ces</a></li>
                            <li><a href="/news/31.shtml" target="_blank" title="投资加盟零食店需要满足哪些条件">投资加盟零食店需要满足哪些条件</a></li>
                            <li><a href="/news/32.shtml" target="_blank" title="投资加盟零食店注意事项有哪些">投资加盟零食店注意事项有哪些</a></li>
                            <li><a href="/news/33.shtml" target="_blank" title="一扫光怎么样？加盟赚钱吗">一扫光怎么样？加盟赚钱吗</a></li>
                            <li><a href="/news/34.shtml" target="_blank" title="投资开零食店需要考虑哪些问题">投资开零食店需要考虑哪些问题</a></li>
                            <li><a href="/news/35.shtml" target="_blank" title="开零食店需要考虑哪些问题">开零食店需要考虑哪些问题</a></li>
                            <li><a href="/news/36.shtml" target="_blank" title="休闲食品加盟店该如何去经营">休闲食品加盟店该如何去经营</a></li>
                            <li><a href="/news/37.shtml" target="_blank" title="小食品加盟店的经营技巧有哪些">小食品加盟店的经营技巧有哪些</a></li>
                            <li><a href="/news/38.shtml" target="_blank" title="休闲零食加盟店的经营技巧有哪些">休闲零食加盟店的经营技巧有哪些</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--快速查询入口-->
            <div class="new_bt">
                <h3> <i></i> 快速查询入口 </h3>
                <div class="kuishurk">
                    <a href="#" target="_blank">智能电视</a>
                    <a href="#" target="_blank">电视盒子</a>
                    <a href="#" target="_blank">开箱晒物</a>
                    <a href="#" target="_blank">智能电视</a>
                    <a href="#" target="_blank">VR</a>
                    <a href="#" target="_blank">智能电视</a>
                    <a href="#" target="_blank">电视盒子</a>
                    <a href="#" target="_blank">开箱晒物</a>
                    <a href="#" target="_blank">智能电视</a>
                    <a href="#" target="_blank">电视盒子</a>
                    <a href="#" target="_blank">开箱晒物</a>
                    <a href="#" target="_blank">智能电视</a>
                    <a href="#" target="_blank">VR</a>
                    <a href="#" target="_blank">智能电视</a>
                    <a href="#" target="_blank">电视盒子</a>
                    <a href="#" target="_blank">开箱晒物</a>
                </div>
            </div>
        </div>
        <!--右边结束-->

        <!--主体结束-->

    </div>
</div>
@stop