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



                            <div class="comments--news " data-id="1210000007726059" data-user-id="" data-author-id="1030000004578945 "
                                 data-is-admin="null">
                                <div class="mb10">
                                    <strong class="comments-stat pull-left mr10">评论</strong>
                                    <div class="btn-group comments-sort">
                                        <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <span class="comments-sort-text">默认排序</span> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:;" data-sort="default">默认排序</a></li>
                                            <li><a href="javascript:;" data-sort="desc">时间排序</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="comments-container">
                                    <div class="comments-box">
                                        <div class="pull-left">
                                            <img class="avatar-32 "
                                                 src="https://static.segmentfault.com/v-58d65f3a/global/img/user-128.png"
                                                 alt=""/>
                                        </div>
                                        <div class="comments-box-content">
                                            <form action="/api/news/[id]/comments/add">
                                                <div class="form-group mb0">
                                            <textarea name="text" rows="3" class="form-control"
                                                      placeholder="文明社会，理性评论"></textarea>

                                                    <div class="mt15 text-right">
                                                        <button type="button" class="hide"></button>
                                                        <button class=" btn btn-primary" type="button">发布评论</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="comments-list">
                                    </div>
                                    <div class="comments-loading hide">载入中...</div>
                                    <div class="comments-more hide"><a href="javascript:;">显示更多评论</a></div>

                                </div>
                            </div>






                        </div>

                        <div class="col-xs-12 col-md-3 mt30">

                            <div class="sfad-sidebar">
                                <div class="sfad-item">
                                    <ins data-revive-zoneid="6" data-revive-block="1" data-revive-target="_blank" data-revive-ct0='1490524637' data-revive-id="0042ddc520dc895b7aa784fe6f9339bd"></ins>
                                    <button class="close" type="button" aria-hidden="true">&times;</button>
                                </div>

                            </div>


                            <div class="news__side-block news__side-block--border-top">
                                <style>
                                    .news__guide-list{
                                        padding-left: 1.5em;
                                        margin-bottom: 30px;
                                    }
                                    .news__guide-list li{
                                        padding-bottom: 5px;
                                    }
                                    .news__guide-list li:last-child{
                                        padding-bottom: 0;
                                    }
                                </style>
                                <h5 class="news__side-block-heading">发帖指南</h5>
                                <div class="news__side-block-content">
                                    <ul class="news__guide-list" >
                                        <li>独立思考、自由探索</li>
                                        <li>发布的内容和互联网、编程开发、产品设计有关</li>
                                        <li>标题能准确描述的内容，不要发重复的内容</li>
                                        <li>客观投票，确保你看过这篇内容</li>
                                        <li>如果你遇到了具体的编程难题，请到 <a target="_blank" href="https://segmentfault.com">问答平台</a> 提问</li>
                                        <li>保持友善，禁止任何形式的广告、SEO 推广<br></li>
                                        <li>遵循 <a href="https://segmentfault.com/tos" target="_blank">用户服务条款</a></li>
                                    </ul>
                                </div>
                            </div>
                            <script type="text/javascript">
                                var currentNewsType = {"id":"1490000006201496","name":"iOS","url":"\/news\/ios","slug":"ios"};
                            </script>

                            <div class="news__side-block news__side-block--border-top">
                                <h5 class="news__side-block-heading">发布工具</h5>
                                <div class="news__side-block-content">
                                    <p>将下面的链接拖到你的浏览器收藏夹，访问任意网页时点击该书签即可分享。</p>

                                    <a href='javascript:(function(){var a=encodeURIComponent(window.document.title),b=encodeURIComponent(window.location.href);window.open("https://segmentfault.com/news/ios#"+a+"/"+b)})();void 0;'
                                       class="drag news__bookmark">分享到 SegmentFault</a>
                                </div>
                            </div>
                            <div class="news__side-block news__side-block--border-top mt20 pt20">
                                <div class="news__side-block-content">

                                    <a href="/news/ios/feeds" class="feed-link">订阅本页 RSS</a>
                                </div>
                            </div>                </div>

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