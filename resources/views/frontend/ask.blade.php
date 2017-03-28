@extends('frontend.frontend')
@section('title') {{$thistypeinfo->title}}@stop
@section('keywords') {{$thistypeinfo->keywords}} @stop
@section('description')  {{$thistypeinfo->description}}  @stop
@section('headlibs')
    <link rel="stylesheet" type="text/css" href="http://www.laravelcms.com/AdminLTE/bootstrap/css/bootstrap.min.css"/>
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
            <div class="news_center">

                <div class="ww_330">

                        <div class="container">
                            <div class="row mb20">
                                <div class="col-md-9 col-sm-12 col-xs-12 mt30">

                                    <div class="news__item mb30">
                                        <div data-id="1210000007726059"
                                             class="news__item-zan   ">
                                            <span class="news__item-zan-icon"></span>
                                            <span class="news__item-zan-number">3</span>
                                            <span class="news__item-zan-text">赞</span>
                                        </div>


                                        <div class="news__item-info">

                                            <a href="/u/easemob" target="_blank"> <img class="avatar-32 pull-right" src="https://sfault-avatar.b0.upaiyun.com/409/100/4091009959-56e12d88a4246_big64" alt=""/></a>
                                            <h4 class="news__item-title"><a class="mr10" target="_blank"
                                                                            href="/r/1250000007726058?shareId=1210000007726059">你看过最漂亮的开源IM Demo UI</a>

                                            </h4>
                                            <p class="news__item-meta mb10">
                                <span><a class="mr10 js__news-user-id" target="_blank" data-id="1030000004578945"
                                         href="/u/easemob">环信即时通讯云</a>2016年12月07日
                                    分享于</span><a class="ml10 " target="_blank" href="/news/ios">iOS</a>

                                                <a target="_blank" href="/r/1250000007726058?shareId=1210000007726059"
                                                   class="news__item-external-link"> www.imgeek.org</a>

                                                <div class="fmt mb10">
                                                    <div ><p>项目使用环信SDK，实现了IM基本功能，我是以极认真的态度来做这个项目，我不想仅仅做一个demo，我要在细节、完成度、bugfree上不输给任何商用APP，做一款媲美微信的IM应用。</p></div>
                                    </div>

                                    <div class="news__item-article" data-url="/r/1250000007726058?shareId=1210000007726059">
                                        <div>
                                            <div class="bg active " data-image=""></div>

                                            <div class="content">
                                                <h3> <a href="/r/1250000007726058?shareId=1210000007726059" target="_blank">你看过最漂亮的开源IM Demo UI</a></h3>
                                                <p class="">点击阅读原文</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="news__comment-ops mb0">
                                <span data-id="1210000007726059" class="mr20 h5_meta-show news_comment-zan ">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                    <span class="news_comment-zan-text"> 赞 </span>
                                    <span class="news_comment-zan-number">[3]</span>
                                </span>
                                        <span class="news__visit-number">517 浏览</span>
                                        <span data-id="1210000007726059" data-type="news" class="ml20 news__bookmark-btn ">收藏 <span class="news__bookmark-value">[30]</span></span>
                                        <span class="ml20 news__report-btn">报告</span>


                                        <span class="hidden-xs"><div class="widget-share__full" data-text="你看过最漂亮的开源IM Demo UI"
                                                                     data-url="https://segmentfault.com/p/1210000007726059" data-shorturl="http://sfau.lt/b7Gz31"></div>
</span>
                                    </div>

                                </div> <!-- news__item-info 结束 -->
                            </div> <!-- news__item 结束 -->
                        </div>
                </div>
            </div>


        </div>





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