@extends('frontend.frontend')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('headlibs')
    <link rel="stylesheet" type="text/css" href="/reception/css/news.css"/>
@stop
@section('main_content')
<div class="bn1190"><a href="#" target="_blank"><img src="/reception/images/temp/bn5.jpg" alt=""/></a></div>
<div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">零售行业资讯</a></div>

<!--主体开始1-->
<div class="main clearfix">
    <!--头部开始-->
    <div  class="layout2">
        <!--幻灯片开始-->
        <div class="brand_slide">
            <ul class="bigImg">
                @foreach( array_filter(explode(',',$thisarticleinfos->article['imagepics'])) as $pics)
                <li><a target="_blank" href="#"><img src="{{$pics}}" alt="【{{$thisarticleinfos->shorttitle}}】"/></a></li>
                @endforeach
            </ul>
            <div class="smallScroll"><a class="sPrev" href="javascript:void(0)"></a>
                <div class="smallImg">
                    <ul>
                        @foreach( array_filter(explode(',',$thisarticleinfos->article['imagepics'])) as $pics)
                            <li><img src="{{$pics}}" alt="【{{$thisarticleinfos->shorttitle}}】"/></li>
                        @endforeach


                    </ul>
                </div>
                <a class="sNext" href="javascript:void(0)"></a> </div>
        </div>
        <!--幻灯片结束-->

        <div class="info">
            <div class="tit">【{{$thisarticleinfos['shorttitle']}}】</div>
            <div class="detail">
                <ul>
                    <li>投资金额：<span class="price">{{$thisarticleinfos->article['brandpay']}}</span></li>
                    <li>所属行业：<span class="crumbs">零食</span></li>
                </ul>
            </div>
            <div class="tit_pice">
                <ul>
                    <li>成立时间：<span class="price">{{$thisarticleinfos->article['brandtime']}}</span></li>
                    <li>门店总数：<span class="price">{{$thisarticleinfos->article['brandnum']}}</span></li>
                    <li>加盟区域：<span class="price">{{$thisarticleinfos->article['brandarea']}}</span></li>
                    <li>适合人群：<span class="price">{{$thisarticleinfos->article['brandperson']}}</span></li>
                    <li>经营范围：<span class="price">{{$thisarticleinfos->article['brandmap']}}</span></li>
                    <li>店铺面积：<span class="price">30~50 ㎡</span></li>
                </ul>
            </div>
            <div class="jiem">
                <ul>
                    <li>意向加盟 <span class="price">{{$thisarticleinfos->article['brandattch']}}</span></li>
                    <li style=" margin-left:35px">申请加盟：<span class="price">{{$thisarticleinfos->article['brandapply']}}</span></li>
                    <li style=" margin-left:35px">品牌好评率 <span class="price">{{rand(90,99)}}%</span></li>
                </ul>
            </div>
            <div class="tel">联系电话：<span>4008-813-178</span></div>
            <div class="btn_area"> <a id="chatNowButton" href="#msg" class="zixun_btn">立即咨询</a> <a href="#msg" class="suoyao_btn">成本预算</a> </div>
        </div>
        <div class="layout2_right fl">
            <div class="comp_box">
                <div class="comp_info"> <b>公司信息</b>
                    <div class="comp_logo"> <img src="{{$thisarticleinfos['litpic']}}" alt="{{$thisarticleinfos['shorttitle']}}"/></div>
                    <div class="comp_info_con">
                        <h3 title="上海卡哇伊实业有限公司">{{$thisarticleinfos->article['brandgroup']}}</h3>
                        <ul>
                            <li><span>企业性质</span><em>国有企业</em></li>
                            <li><span>注册资金</span><em>100 万元</em></li>
                            <li><span>所在地</span><em>{{$thisarticleinfos->article['brandorigin']}}</em></li>
                            <li><span>商业特许经营许可证号：</span><em>{{$thisarticleinfos->article['brandorigin']}}</em></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--公司信息开始-->
            <div class="comp_fenx">
                <div class="renZ_info">
                    <ul >
                        <li class="mr15"><span class="beian1"> </span><em>备案企业</em></li>
                        <li class="mr15"><span class="renzheng1"></span><em>企业认证</em></li>
                        <li><span class="baozhang1"></span><em>投资保障</em></li>
                    </ul>
                </div>
                <div class="fx">
                    <div class="fxd">分享到：</div>
                    <div class="bdsharebuttonbox" data-tag="share_1">
                        <a href="#" class="bds_qzone1" data-cmd="tsina" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina1" data-cmd="qzone" title="分享到新浪微博"></a>
                        <a href="#" class="bds_weixin1" data-cmd="weixin" title="分享到微信"></a>
                    </div>
                    <script>
                        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                    </script>
                </div>
            </div>
            <!--公司信息开始-->
        </div>
    </div>
    <div class="center_list clearfix">
        <!--左边详情开始-->
        <div class="news_box">
            <div class="w870">
                <!--快速导航 开始-->
                <div class="fixed_nav">
                    <div class="cont_tab">
                        <ul>
                            <li class="js_join_1 cur"><a href="javascript:void(0)">品牌介绍</a></li>
                            <li class="js_join_2"><a href="javascript:void(0)">加盟优势</a></li>
                            <li class="js_join_3"><a href="javascript:void(0)">加盟流程</a></li>
                            <li class="js_join_4"><a href="javascript:void(0)">加盟政策</a></li>
                            <li class="js_join_5"><a href="javascript:void(0)">开店必看</a></li>
                            <li class="js_join_6"><a href="javascript:void(0)">投资分析</a></li>
                            <li class="js_join_7"><a href="javascript:void(0)">用户点评</a></li>
                        </ul>
                    </div>
                </div>
                <!--快速导航 结束-->
            </div>
            <div class="news_center">

                <div class="join_cont">
                    <table cellspacing="0" style="border-top: 1px solid rgb(230, 230, 230);">
                        <tbody>
                        <tr>
                            <td class="td_color" >品牌名称</td>
                            <td class="td_style">{{$thisarticleinfos['shorttitle']}}</td>
                            <td class="td_color">投资金额</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandpay']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color" >成立日期</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandtime']}}</td>
                            <td class="td_color">门店总数</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandnum']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color">经营范围</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandmap']}}</td>
                            <td class="td_color">适合人群</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandperson']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color">加盟区域</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandarea']}}</td>
                            <td class="td_color">是否有区域授权</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandduty']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color">品牌发源地</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandorigin']}}</td>
                            <td class="td_color">合同期限</td>
                            <td class="td_style"></td>
                        </tr>
                        <tr>
                            <td class="td_color">培训期限</td>
                            <td class="td_style">二周</td>
                            <td class="td_color">特许使用费</td>
                            <td class="td_style"></td>
                        </tr>
                        <tr>
                            <td class="td_color">公司名称</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandgroup']}}</td>
                            <td class="td_color">公司性质</td>
                            <td class="td_style">{{$thisarticleinfos->article['genre']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color">所需面积</td>
                            <td class="td_style">{{$thisarticleinfos->article['acreage']}}</td>
                            <td class="td_color"> </td>
                            <td class="td_style"> </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="join_tit" id="js_join_1"> <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>加盟详情</em></span> </div>
                    <div class="join_intro">
                        {!! $thisarticleinfos->article['jmxq_content'] !!}
                    </div>
                    <div class="join_tit" id="js_join_2"> <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>加盟条件</em></span> </div>
                    <div class="join_intro">
                        {!! $thisarticleinfos->article['jmzc_content'] !!}
                    </div>
                    <div class="join_tit" id="js_join_3"> <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>加盟流程</em></span> </div>
                    <div class="join_intro">
                        {!! $thisarticleinfos->article['jmlc_content'] !!}
                    </div>
                    <div class="join_tit" id="js_join_4"> <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>加盟优势</em></span> </div>
                    <div class="join_intro">
                        {!! $thisarticleinfos->article['jmys_content'] !!}
                    </div>
                    <div class="join_tit" id="js_join_5"> <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>加盟问答</em></span> </div>
                    <div class="join_intro">
                        {!! $thisarticleinfos->article['jmask_content'] !!}
                    </div>
                    <div class="join_tit" > <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>品牌展示</em></span> </div>
                    <div class=" join_img">
                        <ul>
                            @foreach( array_filter(explode(',',$thisarticleinfos->article['imagepics'])) as $pics)
                                <li><img src="{{$pics}}" alt="【{{$thisarticleinfos->shorttitle}}】"/></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="join_tit"  id="js_join_6" > <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>投资分析</em></span> </div>
                    <table cellspacing="0" style="border-top: 1px solid rgb(230, 230, 230);">
                        <tbody>
                        <tr>
                            <td class="td_color" >品牌名称</td>
                            <td class="td_style">{{$thisarticleinfos['shorttitle']}}</td>
                            <td class="td_color">装修费用</td>
                            <td class="td_style">{{$thisarticleinfos->article['decorationpay']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color" >前两季度房租</td>
                            <td class="td_style">{{$thisarticleinfos->article['quartersrent']}}</td>
                            <td class="td_color">货铺/设备费用</td>
                            <td class="td_style">{{$thisarticleinfos->article['equipmentcost']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color">流动资金</td>
                            <td class="td_style">{{$thisarticleinfos->article['workingcapital']}}</td>
                            <td class="td_color">人工开支</td>
                            <td class="td_style">{{$thisarticleinfos->article['laborquarter']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color">工商税务杂项</td>
                            <td class="td_style">{{$thisarticleinfos->article['miscellaneous']}}</td>
                            <td class="td_color">水电煤(元/月)</td>
                            <td class="td_style">{{$thisarticleinfos->article['watercoal']}}</td>

                        </tr>
                        <tr>
                            <td class="td_color">日成交量</td>
                            <td class="td_style">{{$thisarticleinfos->article['dailyvolume']}}</td>
                            <td class="td_color">平均单价</td>
                            <td class="td_style">{{$thisarticleinfos->article['unitprice']}}</td>

                        </tr>
                        <tr>
                            <td class="td_color">日均成本</td>
                            <td class="td_style">{{($thisarticleinfos->article['decorationpay']/365)+($thisarticleinfos->article['quartersrent']/180)+($thisarticleinfos->article['equipmentcost']/365)+($thisarticleinfos->article['laborquarter']/365)+($thisarticleinfos->article['miscellaneous']/365)+($thisarticleinfos->article['watercoal']/30)}}</td>
                            <td class="td_color">日均收入</td>
                            <td class="td_style">{{($thisarticleinfos->article['dailyvolume']*$thisarticleinfos->article['dailyvolume'])-(($thisarticleinfos->article['decorationpay']/365)+($thisarticleinfos->article['quartersrent']/180)+($thisarticleinfos->article['equipmentcost']/365)+($thisarticleinfos->article['laborquarter']/365)+($thisarticleinfos->article['miscellaneous']/365)+($thisarticleinfos->article['watercoal']/30))}}</td>
                        </tr>
                        <tr>
                            <td class="td_color">月收入</td>
                            <td class="td_style">{{$thisarticleinfos->article['brandgroup']}}</td>
                            <td class="td_color">公司性质</td>
                            <td class="td_style">{{$thisarticleinfos->article['genre']}}</td>
                        </tr>
                        <tr>
                            <td class="td_color">年收入</td>
                            <td class="td_style">{{$thisarticleinfos->article['acreage']}}</td>
                            <td class="td_color"> 投资总额</td>
                            <td class="td_style"> </td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="join_intro clear">
                        <div class="col-md-6">
                            <!-- DONUT CHART -->
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">{{$thisarticleinfos['shorttitle']}} 投资比例</h3>
                                </div>
                                <div class="box-body">
                                    <canvas id="pieChart" style="height:250px"></canvas>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col (LEFT) -->
                        <div class="col-md-6">
                            <!-- BAR CHART -->
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">{{$thisarticleinfos['shorttitle']}}投资对比柱状图</h3>
                                </div>
                                <div class="box-body">
                                    <div class="chart">
                                        <canvas id="barChart" style="height:230px"></canvas>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                        </div>
                        <!-- /.col (RIGHT) -->
                    </div>
                    <!-- /.row -->
                        <!-- /.content -->
                    <div class="clear"></div>

                    <div class="cy_img"><img src="/reception/images/cye_03.jpg" alt="加盟步骤"/> </div>
                    <!--评论-->
                @include('frontend.comment')
                <!--评论end-->

                    <!--用户留言 开始-->
                    <div class="gbook" id="msg">
                        <div class="hd">
                            <span class="tit">我要咨询</span>
                            <em>(24小时内获得企业的快速回复)</em>
                            <span class="tips">(<i>*</i>为必填选项)</span>
                        </div>
                        <div class="bd">
                            <ul>
                                <li><span class="txt"><i>*</i>姓名</span><input type="text" name="guestname" id="guestname" value="" class="input_bk" placeholder="您的真实姓名">
                                    <span class="sex"><label><input type="radio" value="male" name="Sex" class="ly_radio"><em>先生</em></label><label><input type="radio" name="Sex" value="female" class="ly_radio"><em>女士</em></label></span></li>
                                <li><span class="txt"><i>*</i>手机</span><input type="text" class="input_bk" id="phone" name="iphone" placeholder="电话是与您联系的重要方式"></li>
                                <li><span class="txt">地址</span><input type="text" class="input_bk" name="adr" id="adr" placeholder="与您联系的重要方式"></li>
                                <li>
                                    <span class="txt"><i>*</i>留言</span><textarea id="content" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>
                                    <div class="check_msg">
                                        <div class="check_msg_tit">请填写留言或根据意向选择下列快捷留言</div>
                                        <div class="check_msg_bd">
                                            <ul>
                                                <li><a href="javascript:;" class="no" target="_self">我加盟后，您们还会提供哪些服务？</a></li>
                                                <li><a href="javascript:;" class="no" target="_self">有兴趣开一个店，请寄资料或给我打电话。</a></li>
                                                <li><a href="javascript:;" class="no" target="_self">请问我这个地方有加盟商了吗？</a></li>
                                                <li><a href="javascript:;" class="no" target="_self">请将详细投资方案和资料寄给本人。</a></li>
                                                <li><a href="javascript:;" class="no" target="_self">初步打算加盟贵公司，请寄资料。</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="txt">&nbsp;</span><input type="submit" value="提交留言" id="tj_btn" class="btn">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--用户留言 结束-->


                </div>
            </div>
        </div>
        <!--左边详情结束-->

        <!--右边开始-->
        <div class="new_right">
            <!--加盟费计算器 开始-->
            <div class="jmf_calculator">
                <div class="common_bt">
                    <div class="tit">加盟费计算器</div>
                </div>
                <form>
                    <div class="bd">
                        <ul>
                            <li><span class="txt">品牌加盟费：</span><input type="text" class="input_bk"  value="10000" id="num1"><em>元</em></li>
                            <li><span class="txt">品牌管理费：</span><input type="text" class="input_bk" value="10000" id="num2"><em>元</em><i>（按年计算）</i></li>
                            <li><span class="txt">首批进货款：</span><input type="text" class="input_bk" value="10000" id="num3"><em>元</em></li>
                            <li><span class="txt">店面租金：</span><input type="text" class="input_bk" value="10000" id="num4"><em>元</em><i>（按月计算）</i></li>
                            <li><span class="txt">店面装修：</span><input type="text" class="input_bk" value="5000" id="num5"><em>元</em></li>
                            <li><span class="txt">店面装修：</span><input type="text" class="input_bk" value="1200" id="num6"><em>元</em></li>
                            <li><span class="txt">固定资产：</span><input type="text" class="input_bk" value="5000" id="num7"><em>元</em></li>
                            <li><span class="txt">员工数量：</span><input type="text" class="input_bk" value="2" id="num8"><em>人</em><i>（按月计算）</i></li>
                            <li><span class="txt">平均工资：</span><input type="text" class="input_bk" value="3000" id="num9"><em>元</em></li>
                            <li><span class="txt">开业费用：</span><input type="text" class="input_bk" value="10000" id="num10"><em>元</em></li>
                            <li><span class="txt">运营费用：</span><input type="text" class="input_bk" value="10000" id="num11"><em>元</em></li>
                            <li><p class="price">总共：<span class="total" id="total_num"></span>元</p></li>
                            <li><p class="btn"><input class="total_btn" value="计算"><input class="reset_btn" type="reset" value="重置"></p></li>
                        </ul>
                    </div>
                </form>
            </div>
            <!--加盟费计算器 结束-->

            <!--排行榜-->
            <div class="new_bt">
                <h3> <i></i> 零食店加盟排行榜 </h3>
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
            <!--排行榜-->

            <!--最新加盟项目开始-->
            <div class="new_bt">
                <h3> <i></i> 最新休闲食品加盟项目 </h3>
                <div class="bt_xiangmu">
                    <ul>
                        @foreach($latestbrands as $latestbrand)
                        <li> <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.shtml">{{$latestbrand->shorttitle}}</a> </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!--最新加盟项目结束-->

            <!--大家还在搜-->
            <div class="new_bt">
                <h3> <i></i> 大家还在搜 </h3>
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
            <!--新闻-->
            <div class="new_bt">
                <h3> <i></i> 相关新闻 </h3>
                <div class="bts com_news">
                    <div class="common">
                        <ul>
                            <li><a href="/lsbrand/baicaowei/42.shtml" target="_blank" title="111">111</a></li>
                            <li><a href="/lsbrand/ysg/3.shtml" target="_blank" title="一扫光零食怎么样">一扫光零食怎么样</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--右边结束-->

        <!--快速导航 结束-->

    </div>
</div>
<script src="/AdminLTE/plugins/chartjs/Chart.min.js"></script>
<script>
    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.

        var areaChartData = {
            labels: ["三只松鼠", "良品铺子", "一扫光", "老婆大人", "怡佳人", "零食多", "舌间味"],
            datasets: [
                {
                    label: "其他热门品牌",
                    fillColor: "rgba(210, 214, 222, 1)",
                    strokeColor: "rgba(210, 214, 222, 1)",
                    pointColor: "rgba(210, 214, 222, 1)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [90000, 80000, 70000, 60000, 50000, 40000, 70500]
                },
                {
                    label: "{{$thisarticleinfos['shorttitle']}}",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [28000, 20000, 28000, 28000, 28000, 28000, 28000]
                }
            ]
        };

        var areaChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: false,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };


    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: {{$thisarticleinfos->article['decorationpay']}},
        color: "#f56954",
        highlight: "#f56954",
        label: "店铺装修费用"
      },
      {
        value: {{$thisarticleinfos->article['quartersrent']}},
        color: "#00a65a",
        highlight: "#00a65a",
        label: "前两季度房租"
      },
      {
        value: {{$thisarticleinfos->article['equipmentcost']}},
        color: "#f39c12",
        highlight: "#f39c12",
        label: "铺货/设备费用"
      },
      {
        value: {{$thisarticleinfos->article['workingcapital']}},
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "流动资金"
      },
      {
        value: {{$thisarticleinfos->article['laborquarter']}},
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "一季度人工开支"
      },
       {
        value: {{$thisarticleinfos->article['watercoal']}},
        color: "#ec8dbc",
        highlight: "#3c8dbc",
        label: "水电煤(元/月)"
      },
      {
        value: {{$thisarticleinfos->article['miscellaneous']}} ,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "工商税务等杂项"
      }
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
</script>
<!--主体结束-->
@stop
