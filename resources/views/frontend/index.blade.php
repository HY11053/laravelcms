@extends('frontend.frontend')
@section('title') 首页 @stop
@section('keywords') 关键字 @stop
@section('description') 描述 @stop
@section('subnav')
    <div class="sub_nav">
        <dl>
            <dt class="icon1"><a href="#" target="_blank">零食加盟品牌大全</a></dt>
            @foreach($lingshibrands as $lingshibrand)
            <dd><a href="/{{$lingshibrand->arctype->real_path}}/{{$lingshibrand->id}}.shtml" target="_blank" title="{{$lingshibrand->shorttitle}}">{{$lingshibrand->shorttitle}}</a></dd>
            @endforeach
        </dl>
        <dl class="dl_wid1">
            <dt class="icon2"><a href="#" target="_blank" >干果店加盟品牌</a></dt>
            @foreach($chaohuobrands as $chaohuobrand)
                <dd><a href="/{{ $chaohuobrand->arctype->real_path}}/{{ $chaohuobrand->id}}.shtml" target="_blank" title="{{ $chaohuobrand->shorttitle}}">{{ $chaohuobrand->shorttitle}}</a></dd>
            @endforeach

        </dl>
        <dl class="dl_wid1">
            <dt class="icon3"><a href="#" target="_blank">进口零食品牌加盟</a></dt>
            @foreach($jinkoubrands as $jinkoubrand)
            <dd><a href="/{{ $jinkoubrand->arctype->real_path}}/{{$jinkoubrand->id}}.shtm" target="_blank" title="{{$jinkoubrand->shorttitle}}">{{$jinkoubrand->shorttitle}}</a></dd>
            @endforeach
        </dl>

    </div>

@stop
@section('main_content')
    <!--主体开始-->
    <div class="main">
        <!--第一部分开始-->
        <div class="index_box1 clearfix">
            <div class="index_box1_l">
                <div class="search_db">
                    <div class="hd">项目查找</div>
                    <div class="bd">
                        <link href="/reception/css/jquery.selectlist.css" rel="stylesheet" type="text/css" />
                        <script type="text/javascript" src="/reception/js/jquery.selectlist.js"></script>
                        <script type="text/javascript">
                            $(function(){
                                $(".select_bk").selectlist({
                                    zIndex:10,
                                    width:139,
                                    height:32,
                                    triangleSize:6,
                                    triangleColor:'#D6D6D6'
                                });
                            })
                        </script>
                        <!--搜索开始-->
                        <form onsubmit="return false">
                            <input type="hidden" name="_token" value="mQjbG8Vp3zYosUQrZtSQtAYD8fVFW2I4JRWBoVIJ">
                            <div class="select_mod">
                                <div class="clearfix">
                                    <p>
								<span class="cont">
								  <select name="select1" id="select1" class="select_bk">
									<option selected="selected">行业分类</option>
									<option value="零食店加盟">零食店加盟</option>
									<option>炒货加盟</option>
									<option>干果加盟</option>
									<option>进口零食加盟</option>
								  </select>
								</span>
                                    </p>
                                    <p>
								<span class="cont">
								  <select name="select2" id="select2" class="select_bk">
									<option selected="selected">投资金额</option>
									<option>1~5万</option>
									<option>5~10万</option>
									<option>10~20万</option>
									<option>20万~50万</option>
									<option>50~100万</option>
								  </select>
								</span>
                                    </p>
                                    <p>
                                        <span class="cont"><input name="keywordValue" id="ppmc" class="input_bk" value="请输入文本" onfocus="if (value =='请输入文本'){value =''}" onblur="if (value ==''){value='请输入文本'}"></span>
                                    </p>
                                </div>
                                <p><input type="submit" width="126" height="35" id="sub_btn" class="btn" value="项目搜索"></p>
                                <p class="more"><a href="#">快速进入&gt;&gt;</a></p>
                            </div>
                        </form>
                        <div class="tit">投资金额：</div>
                        <div class="price">
                            <a title="1-5万元项目" href="/search/all_1_5_0.shtml">1-5万元</a>
                            <a title="5－10万元项目" href="/search/all_5_10_0.shtml">5-10万元</a>
                            <a title="10－20万元项目" href="/search/all_10_20_0.shtml">10-20万元</a>
                            <a title="20－50万元项目" href="/search/all_20_50_0.shtml">20-50万元</a>
                            <a title="50-100万元项目" href="/search/all_50_100_0.shtml">50-100万元</a>
                            <a title="100万元以上项目" href="/search/all_100_200_0.shtml">100万以上</a>
                        </div>
                        <div class="tit">面积：</div>
                        <div class="area">
                            <a title="10平以下" href="/search/all_0_1_10.shtml">10平以下</a>
                            <a title="10-30平米" href="/search/all_0_10_30.shtml">10-30平米</a>
                            <a title="30-80平米" href="/search/all_0_30_50.shtml">30-50平米</a>
                            <a title="80-150平米" href="/search/all_0_50_80.shtml">50-80平米</a>
                            <a title="150平以上" href="/search/all_0_100_200.shtml">100平以上</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="index_box1_c">
                <!--焦点图 开始-->
                <div class="slideBox">
                    <div class="hd">
                        <ul><li>1</li><li>2</li><li>3</li><li>4</li></ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><a href="#" target="_blank"><img src="/reception/images/temp/banner1.jpg" /></a></li>
                            <li><a href="#" target="_blank"><img src="/reception/images/temp/banner2.jpg" /></a></li>
                            <li><a href="#" target="_blank"><img src="/reception/images/temp/banner3.jpg" /></a></li>
                            <li><a href="#" target="_blank"><img src="/reception/images/temp/banner4.jpg" /></a></li>
                        </ul>
                    </div>
                </div>
                <!--焦点图 结束-->

                <!--加盟步骤 开始-->
                <div class="index_step">
                    <ul>
                        <li>
                            <i class="icon1"></i>
                            <p>找项目</p>
                        </li>
                        <li>
                            <i class="icon2"></i>
                            <p>留言咨询</p>
                        </li>
                        <li>
                            <i class="icon3"></i>
                            <p>等待回访</p>
                        </li>
                        <li>
                            <i class="icon4"></i>
                            <p>成功合作</p>
                        </li>
                    </ul>
                </div>
                <!--加盟步骤 结束-->

            </div>


            <div class="index_box1_r">
                <div class="count">
                    <p>零食加盟网入驻品牌数<br>
                        <span>63864</span>
                    </p>
                    <ul>
                        <li><a href="#" title="【钻石黄金】未来发展空间巨大" target="_blank">【钻石黄金】未来发展空间巨大</a></li>
                        <li><a href="#" title="【璀璨未来】互联网+珠宝" target="_blank">【璀璨未来】互联网+珠宝</a></li>
                        <li><a href="#" title="【加入V6】颠覆你的饰界观" target="_blank">【加入V6】颠覆你的饰界观</a></li>
                        <li><a href="#" title="【品牌荟萃】化妆品店选梵美诗" target="_blank">【品牌荟萃】化妆品店选梵美诗</a></li>
                        <li><a href="#" title="【私人订制】宝乐迪量贩式KTV" target="_blank">【私人订制】宝乐迪量贩式KTV</a></li>
                    </ul>
                    <div class="btn"><a href="#">马上找好项目</a></div>
                </div>
                <div class="tools">
                    <div class="hd">创业必备工具</div>
                    <div class="bd">
                        <ul>
                            <li><a href="#" target="_blank" title="成本计算"><img src="/reception/images/icon_1.png">成本计算</a></li>
                            <li><a href="#" target="_blank" title="贷款计算"><img src="/reception/images/icon_2.png">贷款计算</a></li>
                            <li><a href="#" target="_blank" title="投资预测"><img src="/reception/images/icon_3.png">投资预测</a></li>
                            <li><a href="#" target="_blank" title="创业红包"><img src="/reception/images/icon_4.png">创业红包</a></li>
                            <li><a href="#" target="_blank" title="先行赔付"><img src="/reception/images/icon_5.png">先行赔付</a></li>
                            <li><a href="#" target="_blank" title="一扫光金融"><img src="/reception/images/icon_6.png">一扫光金融</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!--第一部分结束-->


        <!--第二部分 开始-->
        <div class="index_box2">
            <div class="hd">
                <span class="tit">创业好店</span>
                @foreach($cybrands as $cybrand)
                <span class="txt"><a href="/{{$cybrand->arctype->real_path}}/{{$cybrand->id}}.shtml" target="_blank">{{$cybrand->shorttitle}}</a> |  </span>
                @endforeach
            </div>
            <div class="bd">
                <ul>
                    @foreach($cysbrands as $cysbrand)
                    <li><a href="/{{$cysbrand->arctype->real_path}}/{{$cysbrand->id}}.shtml" target="_blank"><img src="{{$cysbrand->litpic}}" title="{{$cysbrand->shorttitle}}" alt="{{$cysbrand->shorttitle}}"><span>{{$cysbrand->shorttitle}}</span></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="index_item_pic">
                <ul>
                    @foreach($cybsbrands as $cybsbrand)
                    <li>
                        <a href="/{{$cybsbrand->arctype->real_path}}/{{$cybsbrand->id}}.shtml" target="_blank" data="{{$cybsbrand->litpic}}"><img src="{{$cybsbrand->litpic}}" width="140" height="81" alt="{{$cybsbrand->title}}" title="{{$cybsbrand->shorttitle}}"/></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--第二部分 结束-->


        <!--第三部分 开始-->
        <div class="index_box3 clearfix">
            <div class="index_box3_l">
                <div class="img_show"><a href="#" target="_blank"><img src="/reception/images/index_pic1.jpg" alt="零食店加盟"/></a></div>
                <p class="tit"><a href="/lsbrand" target="_blank">零食店加盟</a></p>
                <p class="desc">中西美食 烹炸涮烤</p>
                <p class="more"><a href="/lsbrand" target="_blank">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">零食品牌</span>
                    <span class="desc">美式快餐 抢占商机</span>
                    <span class="more"><a href="/lsbrand" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">
                        @foreach($latestlingshibrands as $index=>$latestlingshibrand)

                        @if($index==0 || $index %9 ==0) <dl> @endif

                            <dd><a href="/{{$latestlingshibrand->arctype->real_path}}/{{$latestlingshibrand->id}}.shtml" title="{{$latestlingshibrand->shorttitle}}" target="_blank">{{str_limit($latestlingshibrand->shorttitle, $limit = 8, $end = '')}}</a></dd>

                        @if(($index+1) %9 ==0 || $index==count($latestlingshibrands)) </dl> @endif
                            @endforeach

                    </div>
                    <div class="bd_r">
                        <div class="index_txt_list_wrap">
                            <div class="index_txt_list">
                                @foreach($latestrlingshibrands as $indes=>$latestrlingshibrand)

                                    @if($indes==0 || $indes%2 ==0) <dl> @endif
                                    <dd><a href="/{{$latestrlingshibrand->arctype->real_path}}/{{$latestrlingshibrand->id}}.shtml" title="{{$latestrlingshibrand->shorttitle}}" target="_blank">{{str_limit($latestrlingshibrand->shorttitle, $limit = 16, $end = '')}}</a></dd>

                                    @if($indes%2 !=0 || $indes+1==count($latestrlingshibrands)) </dl>  @endif

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--第三部分 结束-->


        <!--第四部分 开始-->
        <div class="index_box3 clearfix">
            <div class="index_box3_l h420">
                <div class="img_show"><a href="/chaohuodian" target="_blank"><img src="/reception/images/index_pic2.jpg" alt="炒货品牌"/></a></div>
                <p class="tit"><a href="/chaohuodian" target="_blank">炒货品牌</a></p>
                <p class="desc">中西美食 烹炸涮烤</p>
                <p class="more"><a href="/chaohuodian" target="_blank">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">炒货品牌</span>
                    <span class="desc">美式快餐 抢占商机</span>
                    <span class="more"><a href="/chaohuodian" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">

                        @foreach($latestchaohuobrands as $index=>$latestchaohuobrand)

                            @if($index==0 || $index %9 ==0) <dl> @endif

                                <dd><a href="/{{$latestchaohuobrand->arctype->real_path}}/{{$latestchaohuobrand->id}}.shtml" title="{{$latestchaohuobrand->shorttitle}}" target="_blank">{{str_limit($latestchaohuobrand->shorttitle, $limit = 8, $end = '')}}</a></dd>

                                @if(($index+1) %9 ==0 || $index==count($latestchaohuobrands)) </dl> @endif
                        @endforeach

                    </div>
                    <div class="bd_r">
                        <div class="index_brand_list">
                            <ul>
                                @foreach($latestrchaohuobrands as $latestrchaohuobrand)
                                <li><a href="/{{$latestrchaohuobrand->arctype->real_path}}/{{$latestrchaohuobrand->id}}.shtml" target="_blank"><img src="{{$latestrchaohuobrand->litpic}}" title="{{$latestrchaohuobrand->shorttitle}}" alt="{{$latestrchaohuobrand->shorttitle}}"><span>{{$latestrchaohuobrand->shorttitle}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--第四部分 结束-->

        <!--第五部分 开始-->
        <div class="index_box3 clearfix">
            <div class="index_box3_l h420">
                <div class="img_show"><a href="#" target="_blank"><img src="/reception/images/index_pic3.jpg" alt="进口零食"/></a></div>
                <p class="tit"><a href="/jinkoulingshi" target="_blank">进口零食</a></p>
                <p class="desc">中西美食 烹炸涮烤</p>
                <p class="more"><a href="/jinkoulingshi" target="_blank">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">进口零食</span>
                    <span class="desc">美式快餐 抢占商机</span>
                    <span class="more"><a href="/jinkoulingshi" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">
                        @foreach($latestjinkoubrands as $index=>$latestjinkoubrand)

                            @if($index==0 || $index %9 ==0) <dl> @endif

                                <dd><a href="/{{$latestjinkoubrand->arctype->real_path}}/{{$latestjinkoubrand->id}}.shtml" title="{{$latestchaohuobrand->shorttitle}}" target="_blank">{{str_limit($latestjinkoubrand->shorttitle, $limit = 8, $end = '')}}</a></dd>

                                @if(($index+1) %9 ==0 || $index==count($latestjinkoubrands)) </dl> @endif
                        @endforeach
                    </div>
                    <div class="bd_r">
                        <div class="index_brand_list">
                            <ul>

                                @foreach($latestrjinkoubrands as $latestrjinkoubrand)
                                    <li><a href="/{{$latestrjinkoubrand->arctype->real_path}}/{{$latestrjinkoubrand->id}}.shtml" target="_blank"><img src="{{$latestrjinkoubrand->litpic}}" title="{{$latestrjinkoubrand->shorttitle}}" alt="{{$latestrjinkoubrand->shorttitle}}"><span>{{$latestrjinkoubrand->shorttitle}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--第五部分 结束-->

        <!--广告 开始-->
        <div class="bn">
            <ul>
                <li><a href="#" target="_blank"><img src="/reception/images/temp/bn1.jpg" /></a></li>
                <li><a href="#" target="_blank"><img src="/reception/images/temp/bn2.jpg" /></a></li>
            </ul>
        </div>
        <!--广告 结束-->


        <!--第六部分 开始-->
        <div class="index_box4 clearfix">
            <div class="cont4_con fl">
                <h2>大家都在看</h2>
                <div class="con_fir">
                    <div class="fir_left">
                        @foreach($seesrbrands as $seesrbrand)

                        <div class="li_div"><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" title="{{$seesrbrand->shorttitle}}" target="_blank"><img src="{{$seesrbrand->litpic}}"></a><span><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" target="_blank">{{$seesrbrand->shorttitle}}</a><br><font color="#9c9c9c">{{$seesrbrand->article->brandattch}}人</font><em><a href="#" target="_blank">咨询</a></em></span></div>
                        @endforeach
                    </div>
                    <div class="fir_right">
                        <ul>
                            @foreach($seesrbrands as $seesrbrand)
                            <li>
                                <div class="jg">￥{{$seesrbrand->article->brandpay}}</div>
                                <div class="wz"><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" title="{{$seesrbrand->shorttitle}}" target="_blank">{{$seesrbrand->shorttitle}}</a><br><span class="fl">行业：<font color="#666">{{str_replace('加盟','',$seesrbrand->arctype->typename)}}</font></span><span class="fr">{{$seesrbrand->article->brandattch}}人咨询</span></div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cont4_con fr">
                <h2>生意百科</h2>
                <div class="con_sec">
                    <ul>
                        <li class=" one  bor">
                            <span><a href="/ask/6.shtml" title="测试问题及登录验证编辑" target="_blank">测试问题及登录验证编辑</a></span>
                            <p> 测试问题及登录验证编辑</p>
                        </li>
                        <li class=" two  bor">
                            <span><a href="/ask/3.shtml" title="经济学理论模型在设计函数形式时应该注意哪些问题？" target="_blank">经济学理论模型在设计函数形式时应该注意哪些问题？</a></span>
                            <p> 举个例子，一个生产函数写成不限范围，会不会很古怪或者错误？（α、β...</p>
                        </li>
                        <li class=" three  bor">
                            <span><a href="/ask/1.shtml" title="测试问题" target="_blank">测试问题</a></span>
                            <p> dsds</p>
                        </li>
                    </ul>
                    <textarea class="question" onclick="this.value = '';" name="question">#说出您创业疑问，10分钟将得到答案#</textarea>
                    <input type="button" class="wd_submit" value="提问">
                </div>
            </div>
        </div>
        <!--第六部分 结束-->


        <!--第七部分 开始-->
        <div class="index_box5">
            <div class="cont5_left">
                <h2>创业大讲堂</h2>
                <div class="left_one">
                    <div class="one_top">
                        @foreach($recommendnews as $recommendnew)
                        <div class="li_d"> <a href="/{{$recommendnew->arctype->real_path}}/{{$recommendnew->id}}.shtml" title="{{$recommendnew->title}}" target="_blank"><img src="{{$recommendnew->litpic}}" alt="{{$recommendnew->title}}"></a>
                            <div class="d_wz">
                                <h3><a href="/{{$recommendnew->arctype->real_path}}/{{$recommendnew->id}}.shtml" target="_blank" title="{{$recommendnew->title}}">{{$recommendnew->title}}</a></h3>
                                <p>{{str_limit($recommendnew->description, $limit = 48, $end = '')}}</p>
                            </div>
                        </div>
                            @endforeach
                    </div>
                    <div class="one_cen">
                        <ul>
                            @foreach($latesnews as $latesnew)
                            <li><a href="{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.shtml" title="{{$latesnew->title}}" target="_blank">{{$latesnew->title}} </a></li>
                            @endforeach
                              </ul>
                    </div>
                    <div class="one_bot">
                        <dl>
                            <dt>人群解读</dt>
                            <dd><a href="/news/2.shtml" target="_blank" title="ces"><font color="#D71318">[ces]</font>ces</a></dd>
                            <dd><a href="/news/31.shtml" target="_blank" title="投资加盟零食店需要满足哪些条件"><font color="#D71318">[投资加盟]</font>投资加盟零食店需要满足哪些条件</a></dd>
                            <dd><a href="/news/32.shtml" target="_blank" title="投资加盟零食店注意事项有哪些"><font color="#D71318">[投资加盟]</font>投资加盟零食店注意事项有哪些</a></dd>
                            <dd><a href="/news/33.shtml" target="_blank" title="一扫光怎么样？加盟赚钱吗"><font color="#D71318">[一扫光怎]</font>一扫光怎么样？加盟赚钱吗</a></dd>
                            <dd><a href="/news/34.shtml" target="_blank" title="投资开零食店需要考虑哪些问题"><font color="#D71318">[投资开零]</font>投资开零食店需要考虑哪些问题</a></dd>
                            <dd><a href="/news/35.shtml" target="_blank" title="开零食店需要考虑哪些问题"><font color="#D71318">[开零食店]</font>开零食店需要考虑哪些问题</a></dd>
                        </dl>
                    </div>
                </div>
                <div class="left_two">
                    <h4>零食采购信息</h4>
                    <dl>
                        <dd><span>2017-01-14</span><i class=" ye ">1.</i><a href="/lingshijinhuo/49.shtml" target="_blank" title="进货批发测试文档">进货批发测试文档</a></dd>
                    </dl>
                </div>
                <div class="left_two">
                    <h4>地区潮流</h4>
                    <dl>
                        <dt><a href="#" title="女子当众声称小三跳河3次均被救起" target="_blank"><img src="http://images.qudao.com/article/2016-09-06/57ce86e9d81f2.jpg"></a><span>未来路办事处巡防队员司春园等人巡逻到商城东路与【<a href="#" style="color:#D71318;" target="_blank">阅读</a>】</span></dt>
                        <dd><span>10/11</span><a href="#" target="_blank" title="三环路全线公交专用道正式启用早高峰行驶比往日省时近一半"><font color="#D71318">[北京]</font>三环路全线公交专用道</a></dd>
                        <dd><span>10/11</span><a href="#" target="_blank" title="上海金山工业区将打通线上线下志愿服务"><font color="#D71318">[上海]</font>上海金山工业区将打通</a></dd>
                        <dd><span>10/11</span><a href="#" target="_blank" title="天津住房公积金可通过互联网办理相关个人业务"><font color="#D71318">[天津]</font>天津住房公积金可通过</a></dd>
                        <dd><span>10/11</span><a href="#" target="_blank" title="重阳佳节  广州全市25万余人登高"><font color="#D71318">[广东]</font>重阳佳节  广州全市</a></dd>
                        <dd><span>10/11</span><a href="#" target="_blank" title="安徽等8省严厉打击“重金求子”电信网络诈骗犯罪"><font color="#D71318">[安徽]</font>安徽等8省严厉打击“</a></dd>
                        <dd><span>10/10</span><a href="#" target="_blank" title="山东农商互联大会在潍坊召开"><font color="#D71318">[山东]</font>山东农商互联大会在潍</a></dd>
                        <dd><span>10/11</span><a href="#" target="_blank" title="河南将全面实施统一的城乡居民医保制度"><font color="#D71318">[河南]</font>河南将全面实施统一的</a></dd>
                    </dl>
                </div>
            </div>
            <div class="cont5_right">
                <h2>零食展会信息</h2>
                <div class="right_con">
                    <dl>
                        <dt><a href="#" title="10个关键词总结2016上半年食品饮料行业" target="_blank"><img src="http://images.qudao.com/temp/2016-08-19/57b69a1b3be94.jpg" alt="10个关键词总结2016上半年食品饮料行业"></a></dt>
                        <dd><a href="#" title="化妆品行业现状分析及发展趋势预测" target="_blank"><span>[最新]</span>化妆品行业现状分析及发展趋势预</a></dd>
                        <dd><a href="#" title="我国银饰行业发展前景分析" target="_blank"><span>[最新]</span>我国银饰行业发展前景分析</a></dd>
                        <dd><a href="#" title="我国快递行业发展现状分析" target="_blank"><span>[最新]</span>我国快递行业发展现状分析</a></dd>
                        <dd><a href="#" title="2016年1-8月国内汽车销售情况分析" target="_blank"><span>[最新]</span>2016年1-8月国内汽车销售</a></dd>
                        <dd><a href="#" title="2016年礼品行业趋势分析" target="_blank"><span>[最新]</span>2016年礼品行业趋势分析</a></dd>
                        <dd><a href="#" title="零售行业市场销售形势分析" target="_blank"><span>[最新]</span>零售行业市场销售形势分析</a></dd>
                        <dd><a href="#" title="分析：白酒泛品牌化成行业发展新出路" target="_blank"><span>[最新]</span>分析：白酒泛品牌化成行业发展新</a></dd>
                        <dd><a href="#" title="家纺行业出口数据分析浅谈" target="_blank"><span>[最新]</span>家纺行业出口数据分析浅谈</a></dd>
                    </dl>
                </div>
            </div>
        </div>
        <!--第七部分 结束-->


        <!--广告 开始-->
        <div class="bn">
            <ul>
                <li><a href="#" target="_blank"><img src="/reception/images/temp/bn3.jpg" /></a></li>
                <li><a href="#" target="_blank"><img src="/reception/images/temp/bn4.jpg" /></a></li>
            </ul>
        </div>
        <!--广告 结束-->

        <!--友情链接 开始-->
        <div class="friend_links">
            <span>友情链接：</span>
            <a href="http://www.ysgfood.com/" target="_blank">靖江市西贝特食品有限公司</a>
            <a href="http://www.ysgfood.com/" target="_blank">靖江市西贝特食品有限公司</a>
            <a href="http://www.ysgfood.com/" target="_blank">靖江市西贝特食品有限公司</a>
            <a href="http://www.ysg.net" target="_blank">靖江市西贝特食品有限公司</a>
            <a href="http://www.ysgfood.com/" target="_blank">一扫光</a>
        </div>
        <!--友情链接 结束-->

    </div>
    <!--主体结束-->

@stop