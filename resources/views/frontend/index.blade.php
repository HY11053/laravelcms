@extends('frontend.frontend')
@section('title') {{ config('app.webname', '零食加盟网') }} @stop
@section('keywords') {{ config('app.keywords', '零食加盟网') }} @stop
@section('description') {{ config('app.description', '零食加盟网') }} @stop
@section('headlibs')
    <meta name="Copyright" content="58零食网-{{env('APP_URL')}}"/>
    <meta name="author" content="58零食网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',env('APP_URL'))}}" >
    <link rel="canonical" href="{{env('APP_URL')}}"/>
    <meta name="applicable-device" content="pc" />
    <meta property="og:image" content="{{env('APP_URL')}}/reception/images/logo.jpg"/>
@stop
@section('subnav')
    <div class="sub_nav">
        <dl>
            <dt class="icon1"><a href="#" target="_blank">零食加盟品牌大全</a></dt>
            @foreach($lingshibrands as $lingshibrand)
            <dd><a href="/{{$lingshibrand->arctype->real_path}}/{{$lingshibrand->id}}.shtml" target="_blank" title="{{$lingshibrand->article->brandname}}">{{$lingshibrand->article->brandname}}</a></dd>
            @endforeach
        </dl>
        <dl class="dl_wid1">
            <dt class="icon2"><a href="#" target="_blank" >干果店加盟品牌</a></dt>
            @foreach($chaohuobrands as $chaohuobrand)
                <dd><a href="/{{ $chaohuobrand->arctype->real_path}}/{{ $chaohuobrand->id}}.shtml" target="_blank" title="{{ $chaohuobrand->article->brandname}}">{{ $chaohuobrand->article->brandname}}</a></dd>
            @endforeach

        </dl>
        <dl class="dl_wid1">
            <dt class="icon3"><a href="#" target="_blank">进口零食品牌加盟</a></dt>
            @foreach($jinkoubrands as $jinkoubrand)
            <dd><a href="/{{ $jinkoubrand->arctype->real_path}}/{{$jinkoubrand->id}}.shtm" target="_blank" title="{{$jinkoubrand->article->brandname}}">{{$jinkoubrand->article->brandname}}</a></dd>
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
                            {{ csrf_field() }}
                            <div class="select_mod">
                                <div class="clearfix">
                                    <p>
								<span class="cont">
								  <select name="select1" id="select1" class="select_bk">
									<option selected="selected" value="0">行业分类</option>
									<option value="1">零食店加盟</option>
									<option value="3">炒货加盟</option>
									<option value="4">干果加盟</option>
									<option value="5">进口零食加盟</option>
								  </select>
								</span>
                                    </p>
                                    <p>
								<span class="cont">
								  <select name="select2" id="select2" class="select_bk">
									<option selected="selected" value="0">投资金额</option>
									<option>1~5万</option>
									<option>5~10万</option>
									<option>10~20万</option>
									<option>20万~50万</option>
									<option>50~100万</option>
								  </select>
								</span>
                                    </p>
                                    <p>
								<span class="cont">
								  <select name="select3" id="select3" class="select_bk">
									<option selected="selected" value="0">店铺面积</option>
									<option>1~10平米</option>
									<option>10~30平米</option>
									<option>30~50平米</option>
									<option>50~80平米</option>
									<option>100平米以上</option>
								  </select>
								</span>
                                    </p>
                                    <p>
                                        <span class="cont"><input name="keywordValue" id="ppmc" class="input_bk" value="请输入文本" onfocus="if (value =='请输入文本'){value =''}" onblur="if (value ==''){value='请输入文本'}"></span>
                                    </p>
                                </div>
                                <p><input type="submit" width="126" height="35" id="sub_btn" class="btn" value="项目搜索"></p>

                            </div>
                        </form>
                        <div class="tit">投资金额：</div>
                        <div class="price">
                            <a title="1-5万元项目" href="/project/0-1~5-0-0.shtml">1-5万元</a>
                            <a title="5－10万元项目" href="/project/0-5~10-0-0.shtml">5-10万元</a>
                            <a title="10－20万元项目" href="/project/0-10~20-0-0.shtml">10-20万元</a>
                            <a title="20－50万元项目" href="/project/0-20~50-0-0.shtml">20-50万元</a>
                            <a title="50-100万元项目" href="/project/0-50~100-0-0.shtml">50-100万元</a>
                            <a title="100万元以上项目" href="/project/0-100-0-0.shtml">100万以上</a>
                        </div>
                        <div class="tit">面积：</div>
                        <div class="area">
                            <a title="10平以下" href="/project/0-0-1~10-0.shtml">10平以下</a>
                            <a title="10-30平米" href="/project/0-0-10~30-0.shtml">10-30平米</a>
                            <a title="30-80平米" href="/project/0-0-30~50-0.shtml">30-50平米</a>
                            <a title="80-150平米" href="/project/0-0-50~80-0.shtml">50-80平米</a>
                            <a title="150平以上" href="/project/0-0-100-0.shtml">100平以上</a>
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
                            <li><a href="/chaohuodian/5.shtml" target="_blank"><img src="/reception/images/temp/banner1.jpg" /></a></li>
                            <li><a href="/lingshidianpp/38.shtml" target="_blank"><img src="/reception/images/temp/banner2.jpg" /></a></li>
                            <li><a href="/lingshidianpp/91.shtml" target="_blank"><img src="/reception/images/temp/banner3.jpg" /></a></li>
                            <li><a href="/lingshidianpp/111.shtml" target="_blank"><img src="/reception/images/temp/banner4.jpg" /></a></li>
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
                    <p>58零食网入驻品牌数<br>
                        <span>61{{\App\AdminModel\Archive::where('mid',1)->count()}}</span>
                    </p>
                    <ul>
                        <li><a href="/chaohuodian/5.shtml" title="【三只松鼠】森林系零食品牌 不负好时光" target="_blank">【三只松鼠】森林系零食品牌 不负好时光</a></li>
                        <li><a href="/lingshidianpp/38.shtml" title="【良品铺子】良心品质 百年铺子" target="_blank">【良品铺子】良心品质 百年铺子</a></li>
                        <li><a href="/lingshidianpp/91.shtml" title="【一扫光】13国原料采购 0经验无忧开店" target="_blank">【一扫光】13国原料采购 0经验无忧开店</a></li>
                        <li><a href="/lingshidianpp/35.shtml" title="【来伊份】带你吃遍满天新" target="_blank">【来伊份】带你吃遍满天新</a></li>
                        <li><a href="/lingshidianpp/111.shtml" title="百草味】国民品牌 百草味 知心知味" target="_blank">【百草味】国民品牌 百草味 知心知味</a></li>
                    </ul>
                    <div class="btn"><a href="#">马上找好项目</a></div>
                </div>
                <div class="tools">
                    <div class="hd">创业必备工具</div>
                    <div class="bd">
                        <ul>
                            <li><a href="javascript:;" rel="nofollow" target="_self" title="成本计算"><img src="/reception/images/icon_1.png">成本计算</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="贷款计算"><img src="/reception/images/icon_2.png">贷款计算</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="投资预测"><img src="/reception/images/icon_3.png">投资预测</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="创业红包"><img src="/reception/images/icon_4.png">创业红包</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="先行赔付"><img src="/reception/images/icon_5.png">先行赔付</a></li>
                            <li><a href="javascript:;" rel="nofollow" target="_self"  title="一扫光金融"><img src="/reception/images/icon_6.png">一扫光金融</a></li>
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
                <span class="txt"><a href="/{{$cybrand->arctype->real_path}}/{{$cybrand->id}}.shtml" target="_blank">{{$cybrand->article->brandname}}</a> |  </span>
                @endforeach
            </div>
            <div class="bd">
                <ul>
                    @foreach($cysbrands as $cysbrand)
                    <li><a href="/{{$cysbrand->arctype->real_path}}/{{$cysbrand->id}}.shtml" target="_blank"><img src="{{$cysbrand->litpic}}" title="{{$cysbrand->article->brandname}}" alt="{{$cysbrand->article->brandname}}"><span>{{$cysbrand->article->brandname}}</span></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="index_item_pic">
                <ul>
                    @foreach($cybsbrands as $cybsbrand)
                    <li>
                        <a href="/{{$cybsbrand->arctype->real_path}}/{{$cybsbrand->id}}.shtml" target="_blank" data="{{$cybsbrand->litpic}}"><img src="{{$cybsbrand->litpic}}" width="140" height="81" alt="{{$cybsbrand->title}}" title="{{$cybsbrand->article->brandname}}"/></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--第二部分 结束-->


        <!--第三部分 开始-->
        <div class="index_box3 clearfix">
            <div class="index_box3_l">
                <div class="img_show"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" target="_blank"><img src="/reception/images/index_pic1.jpg" title="{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}" alt="零食店加盟"/></a></div>
                <p class="tit"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" target="_blank">零食店加盟</a></p>
                <p class="desc">中西美食 烹炸涮烤</p>
                <p class="more"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" target="_blank" title="{{\App\AdminModel\Arctype::where('id',1)->value('typename')}}">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">零食品牌</span>
                    <span class="desc">美式快餐 抢占商机</span>
                    <span class="more"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">
                        @foreach($latestlingshibrands as $index=>$latestlingshibrand)

                        @if($index==0 || $index %9 ==0) <dl> @endif

                            <dd><a href="/{{$latestlingshibrand->arctype->real_path}}/{{$latestlingshibrand->id}}.shtml" title="{{$latestlingshibrand->article->brandname}}" target="_blank">{{$latestlingshibrand->article->brandname}}</a></dd>

                        @if(($index+1) %9 ==0 || $index==count($latestlingshibrands)) </dl> @endif
                            @endforeach

                    </div>
                    <div class="bd_r">
                        <div class="index_txt_list_wrap">
                            <div class="index_txt_list">
                                @foreach($latestrlingshibrands as $indes=>$latestrlingshibrand)

                                    @if($indes==0 || $indes%2 ==0) <dl> @endif
                                    <dd><a href="/{{$latestrlingshibrand->arctype->real_path}}/{{$latestrlingshibrand->id}}.shtml" title="{{$latestrlingshibrand->article->brandname}}" target="_blank">{{$latestrlingshibrand->article->brandname}}</a></dd>

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
                <div class="img_show"><a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}/" target="_blank"><img src="/reception/images/index_pic2.jpg" alt="炒货品牌"/></a></div>
                <p class="tit"><a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}/" target="_blank">炒货品牌</a></p>
                <p class="desc">中西美食 烹炸涮烤</p>
                <p class="more"><a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}/" target="_blank" title="{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">炒货品牌</span>
                    <span class="desc">美式快餐 抢占商机</span>
                    <span class="more"><a href="/{{\App\AdminModel\Arctype::where('id',3)->value('real_path')}}/" target="_blank" title="{{\App\AdminModel\Arctype::where('id',3)->value('typename')}}">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">

                        @foreach($latestchaohuobrands as $index=>$latestchaohuobrand)

                            @if($index==0 || $index %9 ==0) <dl> @endif

                                <dd><a href="/{{$latestchaohuobrand->arctype->real_path}}/{{$latestchaohuobrand->id}}.shtml" title="{{$latestchaohuobrand->article->brandname}}" target="_blank">{{str_limit($latestchaohuobrand->article->brandname, $limit = 8, $end = '')}}</a></dd>

                                @if(($index+1) %9 ==0 || $index==count($latestchaohuobrands)) </dl> @endif
                        @endforeach

                    </div>
                    <div class="bd_r">
                        <div class="index_brand_list">
                            <ul>
                                @foreach($latestrchaohuobrands as $latestrchaohuobrand)
                                <li><a href="/{{$latestrchaohuobrand->arctype->real_path}}/{{$latestrchaohuobrand->id}}.shtml" target="_blank"><img src="{{$latestrchaohuobrand->litpic}}" title="{{$latestrchaohuobrand->article->brandname}}" alt="{{$latestrchaohuobrand->article->brandname}}"><span>{{$latestrchaohuobrand->article->brandname}}</span></a></li>
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
                <div class="img_show"><a href="/{{\App\AdminModel\Arctype::where('id',5)->value('real_path')}}/" target="_blank"><img src="/reception/images/index_pic3.jpg" alt="进口零食"/></a></div>
                <p class="tit"><a href="/{{\App\AdminModel\Arctype::where('id',5)->value('real_path')}}/" target="_blank">进口零食</a></p>
                <p class="desc">中西美食 烹炸涮烤</p>
                <p class="more"><a href="/{{\App\AdminModel\Arctype::where('id',5)->value('real_path')}}/" target="_blank">查看详情&gt;</a></p>
            </div>
            <div class="index_box3_r">
                <div class="hd">
                    <span class="tit">进口零食</span>
                    <span class="desc">美式快餐 抢占商机</span>
                    <span class="more"><a href="/{{\App\AdminModel\Arctype::where('id',5)->value('real_path')}}/" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <div class="bd">
                    <div class="bd_l">
                        @foreach($latestjinkoubrands as $index=>$latestjinkoubrand)

                            @if($index==0 || $index %9 ==0) <dl> @endif

                                <dd><a href="/{{$latestjinkoubrand->arctype->real_path}}/{{$latestjinkoubrand->id}}.shtml" title="{{$latestchaohuobrand->article->brandname}}" target="_blank">{{str_limit($latestjinkoubrand->article->brandname, $limit = 8, $end = '')}}</a></dd>

                                @if(($index+1) %9 ==0 || $index==count($latestjinkoubrands)) </dl> @endif
                        @endforeach
                    </div>
                    <div class="bd_r">
                        <div class="index_brand_list">
                            <ul>

                                @foreach($latestrjinkoubrands as $latestrjinkoubrand)
                                    <li><a href="/{{$latestrjinkoubrand->arctype->real_path}}/{{$latestrjinkoubrand->id}}.shtml" target="_blank"><img src="{{$latestrjinkoubrand->litpic}}" title="{{$latestrjinkoubrand->article->brandname}}" alt="{{$latestrjinkoubrand->article->brandname}}"><span>{{$latestrjinkoubrand->article->brandname}}</span></a></li>
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

                        <div class="li_div"><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" title="{{$seesrbrand->article->brandname}}" target="_blank"><img src="{{$seesrbrand->litpic}}"></a><span><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" target="_blank">{{$seesrbrand->article->brandname}}</a><br><font color="#9c9c9c">{{$seesrbrand->article->brandattch}}人</font><em><a href="#" target="_blank">咨询</a></em></span></div>
                        @endforeach
                    </div>
                    <div class="fir_right">
                        <ul>
                            @foreach($seesrbrands as $seesrbrand)
                            <li>
                                <div class="jg">￥{{$seesrbrand->article->brandpay}}</div>
                                <div class="wz"><a href="/{{$seesrbrand->arctype->real_path}}/{{$seesrbrand->id}}.shtml" title="{{$seesrbrand->article->brandname}}" target="_blank">{{$seesrbrand->article->brandname}}</a><br><span class="fl">行业：<font color="#666">{{str_replace('加盟','',$seesrbrand->arctype->typename)}}</font></span><span class="fr">{{$seesrbrand->article->brandattch}}人咨询</span></div>
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
                        @foreach($askrows as $index=>$askrow)
                            <li class="@if($index==0) one @elseif ($index==1) two @else three @endif bor">
                                <span><a href="/ask/{{$askrow->id}}.shtml" title="{{$askrow->title}}" target="_blank">{{$askrow->title}}</a></span>
                                <p> {{str_limit(trim(strip_tags($askrow->body)),$limit =64,$end = '...')}}</p>
                            </li>
                        @endforeach
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
                            @foreach($crowdnews as $crowdnew)
                            <dd><a href="/{{$crowdnew->arctype->real_path}}/{{$crowdnew->id}}.shtml" target="_blank" title="{{$crowdnew->title}}"><font color="#D71318">{{str_limit($crowdnew->tags,8,'')}}</font>{{$crowdnew->title}}</a></dd>
                           @endforeach
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
                        @foreach($zhbrands as $nums=>$zhbrand)
                            @if($nums ==0)
                                <dt><a href="{{ $zhbrand->arctype->real_path}}/{{$zhbrand->id}}.shtml" title="{{$zhbrand->title}}" target="_blank"><img src="{{$zhbrand->litpic}}" alt="{{$zhbrand->title}}" style="height: 85px; overflow: hidden"></a></dt>
                            @endif
                                <dd><a href="{{ $zhbrand->arctype->real_path}}/{{$zhbrand->id}}.shtml" title="{{$zhbrand->title}}" target="_blank"><span>[最新]</span>{{$zhbrand->title}}</a></dd>
                    @endforeach
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
            @foreach($flinks as $flink)
            <a href="{{$flink->weburl}}" target="_blank">{{$flink->webname}}</a>
            @endforeach
        </div>
        <!--友情链接 结束-->

    </div>
    <!--主体结束-->
	
<!--底部固定计算器 开始-->
<div id="bottom_calculator" class="bottom_slide_box" style="left: 0px; bottom:-420px;"> 
	<!-- 以下是隐藏点击层 -->
	<div class="bottom_slide_content"> 
		<!-- 关闭按钮不显示 (功能正常)--> 
		<!-- <div class="bottom_slide_close"></div> -->
		<div class="bottom_slide_click"></div>
		<div class="slide_box_shade"></div>
		<div class="zxbj_details">
			<div class="all_Calc_Container Calc_Container_zxys">
				<div class="bottom_slide_img"></div>
				<div class="bottom_slide_down bottom_slide_up" style="top:-50px;"></div>
				<div class="zxbj_zxys">
					<div class="con_bj clear"><!-- calculate -->
						<div class="con_bj_cal col_l">
							<h3 class="calputer_tit">开店计算器<span>今天已有 <em class="zxys_num_man">1413</em> 位业主获取了开店预算</span></h3>
							<form>
								<div class="mod_form bj_form">
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>所在城市：</label>
										<div class="element">
											<div class="province-town clear">
												<select id="b_Shen" name="b_Shen" class="select_Shen" onchange="set_city(this, document.getElementById('b_city'));">
													<option value="0">省/市</option>
													<option value="安徽">A 安徽</option>
													<option value="北京">B 北京</option>
													<option value="重庆">C 重庆</option>
													<option value="福建">F 福建</option>
													<option value="广西">G 广西</option>
													<option value="贵州">G 贵州</option>
													<option value="广东">G 广东</option>
													<option value="甘肃">G 甘肃</option>
													<option value="海南">H 海南</option>
													<option value="湖北">H 湖北</option>
													<option value="黑龙江">H 黑龙江</option>
													<option value="河南">H 河南</option>
													<option value="河北">H 河北</option>
													<option value="湖南">H 湖南</option>
													<option value="江苏">J 江苏</option>
													<option value="吉林">J 吉林</option>
													<option value="江西">J 江西</option>
													<option value="辽宁">L 辽宁</option>
													<option value="内蒙古">N 内蒙古</option>
													<option value="宁夏">N 宁夏</option>
													<option value="澳门">O 澳门</option>
													<option value="青海">Q 青海</option>
													<option value="四川">S 四川</option>
													<option value="陕西">S 陕西</option>
													<option value="上海">S 上海</option>
													<option value="山东">S 山东</option>
													<option value="山西">S 山西</option>
													<option value="台湾">T 台湾</option>
													<option value="天津">T 天津</option>
													<option value="西藏">X 西藏</option>
													<option value="香港">X 香港</option>
													<option value="新疆">X 新疆</option>
													<option value="云南">Y 云南</option>
													<option value="浙江">Z 浙江</option>
												</select>
												<select id="b_city" name="b_city" class="select_City">
													<option value="0">市/地区</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>店铺租金：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="dpzj" id="dpzj">
										</div>
									</div>
									</div>
									
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>人员成本：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="rycb" id="rycb">
										</div>
									</div>
									</div>
									
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>每日成本：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="mrcb" id="mrcb">
										</div>
									</div>
									</div>
									
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>每单均价：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="mdjj" id="mdjj">
										</div>
									</div>
									</div>
									
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>加盟费用：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="jmfy" id="jmfy">
										</div>
									</div>
									</div>
									

									<div class="form_line" id="zxys_phoneInput">
										<label for="" class="label"><em class="label_start">*</em>手机号码 ：</label>
										<div class="element">
											<div class="text_wrap">
												<input id="zxys_phonenumber" type="text" class="text phonetext" name="phone">
												</div>
										</div>
									</div>
									<div class="form_line"><a href="javascript:void(0);" class="calc-btn-start" id="zxys_calc_btn">
										<label for="zxys_calc_btn" id="zxys_btn_calc" class="calcstart">开始计算</label>
										<!-- 开始计算 -->
										<input type="hidden" id="zxys_myptag" name="ptag" value="1_1_1_99">
										</a></div>
								</div>
							</form>
						</div>
						<!-- results -->
						<div class="con_bj_res col_l"><!--<h3>计算结果</h3>-->
							<div class="zxys_result"><span class="zxys-result-span">您的开店预算</span><b id="bprice">？</b><span>元</span></div>
							<div class="zxgs-list">
								<ul class="zxgs-list-before">
									<li class=""><span>材料费：</span><strong id="materialPay"><em>？</em>元</strong></li>
									<li class=""><span>人工费：</span><strong id="artificialPay"><em>？</em>元</strong></li>
									<li class=""><span>设计费：</span><strong id="designPay"><em>？</em>元</strong></li>
									<li class=""><span>质检费：</span><strong id="qualityPay"><em>？</em>元</strong></li>
								</ul>
							</div>
							<div class="bj_explain zxys_explain" style="display:none">
								<p class="attention holiday-text"><b>*</b>稍候装修管家将回电您，免费提供装修咨询服务</p>
								<p class="text-none"><b>*</b>因材料品牌及工程量不同，具体报价以量房实测为准</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--底部固定计算器 结束-->

<!--右侧固定 开始-->
<div class="slide-help-box">
	<div class="slide-help">
		<a href="javascript:void(0);" class="zhiCustomBtn ico-consult" id="ico-consult1"><em class="consult-message">0</em><i></i><span>在线咨询</span></a>
		<a target="_blank" href="#" rel="nofollow" class="ico-feedback"><i></i><span>意见反馈</span></a>
		<a href="javascript:;" class="ico-attention"><i></i><span>关注有礼</span></a>
		<a href="javascript:;" class="ico-quoted"></a>
		<a href="javascript:;" class="ico-backtop"><i></i><span>回到顶部</span></a>
		<div class="attention-code">
			<div class="attention-code-img">
				<img src="/reception/images/new_float_loadapp.jpg" alt="" class="new-float-loadapp">
				<p class="new-float-loadapp">关注零食加盟</p>
				<p class="new-float-loadapp">查看业主真实装修日记</p>
				<img src="/reception/images/code_other_tap.jpg" alt="">
				<p>扫微信</p>
				<p>获10000套家居设计案例</p>
			</div>
		</div>
	</div>
</div>
<!--右侧固定 结束-->

<!--弹窗计算器 开始-->
<div class="calculator_popup_mask"></div>
<div class="bottom_slide_box calculator_popup">
<a id="calculator_popup_close" class="close" href="javascript:void(0)" title="关闭">×</a>
<div class="zxbj_zxys">
					<div class="con_bj clear"><!-- calculate -->
						<div class="con_bj_cal col_l">
							<h3 class="calputer_tit">开店计算器<span>今天已有 <em class="zxys_num_man">1413</em> 位业主获取了开店预算</span></h3>
							<form>
								<div class="mod_form bj_form">
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>所在城市：</label>
										<div class="element">
											<div class="province-town clear">
												<select id="Shen" name="Shen" class="select_Shen" onchange="set_city(this, document.getElementById('city'));">
													<option value="0">省/市</option>
													<option value="安徽">A 安徽</option>
													<option value="北京">B 北京</option>
													<option value="重庆">C 重庆</option>
													<option value="福建">F 福建</option>
													<option value="广西">G 广西</option>
													<option value="贵州">G 贵州</option>
													<option value="广东">G 广东</option>
													<option value="甘肃">G 甘肃</option>
													<option value="海南">H 海南</option>
													<option value="湖北">H 湖北</option>
													<option value="黑龙江">H 黑龙江</option>
													<option value="河南">H 河南</option>
													<option value="河北">H 河北</option>
													<option value="湖南">H 湖南</option>
													<option value="江苏">J 江苏</option>
													<option value="吉林">J 吉林</option>
													<option value="江西">J 江西</option>
													<option value="辽宁">L 辽宁</option>
													<option value="内蒙古">N 内蒙古</option>
													<option value="宁夏">N 宁夏</option>
													<option value="澳门">O 澳门</option>
													<option value="青海">Q 青海</option>
													<option value="四川">S 四川</option>
													<option value="陕西">S 陕西</option>
													<option value="上海">S 上海</option>
													<option value="山东">S 山东</option>
													<option value="山西">S 山西</option>
													<option value="台湾">T 台湾</option>
													<option value="天津">T 天津</option>
													<option value="西藏">X 西藏</option>
													<option value="香港">X 香港</option>
													<option value="新疆">X 新疆</option>
													<option value="云南">Y 云南</option>
													<option value="浙江">Z 浙江</option>
												</select>
												<select id="city" name="city" class="select_City">
													<option value="0">市/地区</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>店铺租金：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="dpzj" id="dpzj">
										</div>
									</div>
									</div>
									
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>人员成本：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="rycb" id="rycb">
										</div>
									</div>
									</div>
									
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>每日成本：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="mrcb" id="mrcb">
										</div>
									</div>
									</div>
									
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>每单均价：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="mdjj" id="mdjj">
										</div>
									</div>
									</div>
									
									<div class="form_line">
										<label for="" class="label"><em class="label_start">*</em>加盟费用：</label>
										<div class="element">
											<div class="text_wrap">
												<input type="text" class="text area_text" name="jmfy" id="jmfy">
										</div>
									</div>
									</div>
									

									<div class="form_line" id="zxys_phoneInput">
										<label for="" class="label"><em class="label_start">*</em>手机号码 ：</label>
										<div class="element">
											<div class="text_wrap">
												<input id="zxys_phonenumber" type="text" class="text phonetext" name="phone">
												</div>
										</div>
									</div>
									<div class="form_line"><a href="javascript:void(0);" class="calc-btn-start" id="zxys_calc_btn">
										<label for="zxys_calc_btn" id="zxys_btn_calc" class="calcstart">开始计算</label>
										<!-- 开始计算 -->
										<input type="hidden" id="zxys_myptag" name="ptag" value="1_1_1_99">
										</a></div>
								</div>
							</form>
						</div>
						<!-- results -->
						<div class="con_bj_res col_l"><!--<h3>计算结果</h3>-->
							<div class="zxys_result"><span class="zxys-result-span">您的开店预算</span><b id="bprice">？</b><span>元</span></div>
							<div class="zxgs-list">
								<ul class="zxgs-list-before">
									<li class=""><span>材料费：</span><strong id="materialPay"><em>？</em>元</strong></li>
									<li class=""><span>人工费：</span><strong id="artificialPay"><em>？</em>元</strong></li>
									<li class=""><span>设计费：</span><strong id="designPay"><em>？</em>元</strong></li>
									<li class=""><span>质检费：</span><strong id="qualityPay"><em>？</em>元</strong></li>
								</ul>
							</div>
							<div class="bj_explain zxys_explain" style="display:none">
								<p class="attention holiday-text"><b>*</b>稍候装修管家将回电您，免费提供装修咨询服务</p>
								<p class="text-none"><b>*</b>因材料品牌及工程量不同，具体报价以量房实测为准</p>
							</div>

						</div>
					</div>
				</div>
</div>
<!--弹窗计算器 结束-->
<link href="/reception/css/zxbj_bottom_slide.css" rel="stylesheet" type="text/css"/>
<script src="/reception/js/GlobalProvinces.js" type="text/javascript"></script>

@stop