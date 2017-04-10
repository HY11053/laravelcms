@extends('frontend.frontend')
@section('title'){{$thisaskinfo->title}}@stop
@section('keywords') {{$thisaskinfo->title}} @stop
@section('description') {{str_limit(strip_tags($thisaskinfo->body),'77','')}}@stop
@section('headlibs')
    <link rel="stylesheet" type="text/css" href="/reception/css/news.css"/>
@stop
@section('main_content')
    <div class="bn1190"><a href="#" target="_blank"><img src="/reception/images/temp/bn5.jpg" alt=""/></a></div>
    <div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">零售行业资讯</a></div>
    <!--主体开始-->
    <div class="main clearfix">
        <div class="center_list clearfix">
            <!--左边内容开始-->
            <div class="inter">

                <div class="interl">
                    <div class="interl1"><a href="#">{{$thisaskinfo->title}}</a></div>
                    <div class="interl2">{!! $thisaskinfo->body !!}</div>
                    <div class="interl3">
                        <i>{{$thisaskinfo->tags}}&nbsp;&nbsp;|&nbsp;&nbsp;浏览 {{$thisaskinfo->viewnum}} 次</i>
                        <span>{{\Carbon\Carbon::parse($thisaskinfo->created_at)->diffForHumans()}}</span>
                    </div>
                </div>


                <div class="interlo">
                    <div class="interlo_top">
                        <div class="interlo_topl">{{count($thisaskanswers)}}个回答</div>
                        <div class="interlo_topr">
                            <i class="ba"><a href="#">默认留言</a></i>
                            <i><a href="#">时间排序</a></i>
                        </div>
                    </div>
                </div>
                @foreach($thisaskanswers as $thisaskanswer)
                    <div class="interlonr">
                        <div class="interlonr_top">
                            <div class="interlo_nrl"><a href="#"><img src="/AdminLTE/dist/img/avatar.png" /></a></div>
                            <div class="interlo_nrr">
                                <ul>
                                    <li><a href="#">{{$thisaskanswer->user->name}}</a></li>
                                    <li>1234567890</li>
                                </ul>
                            </div>
                        </div>
                        <div class="interlo_con">
                            {!! $thisaskanswer->content !!}
                        </div>
                        <div class="interlo_btm">
                            <i>{{$thisaskanswer->user->name}} 回答于{{\Carbon\Carbon::parse($thisaskanswer->created_at)->diffForHumans()}}&nbsp;&nbsp;</i>
                            <span> <div class="fx">
                    <div class="fxd">分享到：</div>
                    <div class="bdsharebuttonbox" data-tag="share_1">
                        <a href="#" class="bds_qzone1" data-cmd="tsina" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina1" data-cmd="qzone" title="分享到新浪微博"></a>
                        <a href="#" class="bds_weixin1" data-cmd="weixin" title="分享到微信"></a>
                    </div>
                    <script>
                        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                    </script>
                </div></span>
                        </div>
                    </div>
                @endforeach

                {{Form::open(array('route' => array('answercrtete',$thisaskinfo->id),'method' => 'put'))}}
                <div class="internoter">
                <p>我有更好答案</p>
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
                    <script id="container" name="content" type="text/plain"></script>
                    <button type="submit"  class="btn btn-md bg-maroon">提交问答</button>
                    <div class="clear"></div>
                    @if ($errors->has('content'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                    @endif
                </div>

                {!! Form::close() !!}
            </div>
            <!--左边内容结束-->

            <!--右边开始-->
            <div class="new_right">
                <!--排行榜-->
                <div class="new_bt">
                    <h3> <i></i> 零售店加盟排行榜 </h3>
                    <div class="rank_bd">
                        <ul>


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
    <script src="http://www.shangjicms.com/vendor/ueditor/third-party/highcharts/highcharts.js"></script>
    <script src="http://www.shangjicms.com/vendor/ueditor/dialogs/charts/chart.config.js"></script>
    <script src="http://www.shangjicms.com/vendor/ueditor/dialogs/internal.js"></script>
    <script src="/vendor/ueditor/dialogs/charts/charts.js"></script>

@stop