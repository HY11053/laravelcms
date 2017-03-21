@extends('frontend.frontend')
@section('title') 列表页 @stop
@section('keywords') 关键字 @stop
@section('description') 描述 @stop

<!--主体开始-->
@section('main_content')
    <div class="bn1190"><a href="#" target="_blank"><img src="/reception/images/temp/bn5.jpg" alt=""/></a></div>
    <div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">零售行业资讯</a></div>
<div class="main clearfix">

    <!--分类筛选 开始-->
    <div class="cate_sort">
        <dl>
            <dt>已经筛选条件：</dt>
            <dd></dd>
        </dl>
        <dl>
            <dt>项目分类</dt>
            <dd><a class="hover" target="_self" href="#">全部</a></dd>
            <dd><a target="_self" href="/lsbrand/">零食加盟店</a></dd>
            <dd><a target="_self" href="/ganguodian/">干果加盟店</a></dd>
            <dd><a target="_self" href="/chaohuodian/">炒货加盟店</a></dd>
            <dd><a target="_self" href="/jinkoulingshi/">进口零食加盟店</a></dd>

        </dl>
        <dl>
            <dt>投资金额</dt>
            <dd><a class="hover" target="_self" href="#">全部</a></dd>
            <dd><a target="_self" href="/search/lsbrand_1_5_0.shtml">1-5万元</a></dd>
            <dd><a target="_self" href="/search/lsbrand_5_10_0.shtml">5-10万元</a></dd>
            <dd><a target="_self" href="/search/lsbrand_10_20_0.shtml">10-20万元</a></dd>
            <dd><a target="_self" href="/search/lsbrand_20_30_0.shtml">20-30万元</a></dd>
            <dd><a target="_self" href="/search/lsbrand_30_50_0.shtml">30-50万元</a></dd>
            <dd><a target="_self" href="/search/lsbrand_50_100_0.shtml">50-100万元</a></dd>
        </dl>
        <dl>
            <dt>店铺面积</dt>
            <dd><a class="hover" target="_self" href="#">全部</a></dd>
            <dd><a target="_self" href="/search/lsbrand_0_0_10.shtml">10平米以下</a></dd>
            <dd><a target="_self" href="/search/lsbrand_0_10_30.shtml">10-30平米</a></dd>
            <dd><a target="_self" href="/search/lsbrand_0_30_50.shtml">30-50平米</a></dd>
            <dd><a target="_self" href="/search/lsbrand_0_50_80.shtml">50-80平米</a></dd>
            <dd><a target="_self" href="/search/lsbrand_0_100_200.shtml">100平米以上</a></dd>
        </dl>
        <dl>
            <dt>所在地区</dt>
            <dd><a class="hover" target="_self" href="#">全部</a></dd>
            <dd><a target="_self" href="/search/city/1">北京</a></dd>
            <dd><a target="_self" href="/search/city/125">济南</a></dd>
            <dd><a target="_self" href="/search/city/71">广州</a></dd>
            <dd><a target="_self" href="/search/city/281">合肥</a></dd>
            <dd><a target="_self" href="/search/city/400">上海</a></dd>
            <dd><a target="_self" href="/search/city/282">芜湖</a></dd>
            <dd><a target="_self" href="/search/city/195">武汉</a></dd>
            <dd><a target="_self" href="/search/city/112">南京</a></dd>
            <dd><a target="_self" href="/search/city/296">长沙</a></dd>
            <dd><a target="_self" href="/search/city/126">青岛</a></dd>
            <dd><a target="_self" href="/search/city/72">深圳</a></dd>
            <dd><a target="_self" href="/search/city/164">成都</a></dd>
            <dd><a target="_self" href="/search/city/139">沈阳</a></dd>
            <dd><a target="_self" href="/search/city/29">重庆</a></dd>
            <dd><a target="_self" href="/search/city/212">郑州</a></dd>
            <dd><a target="_self" href="/search/city/101">杭州</a></dd>
            <dd><a target="_self" href="/search/city/83">佛山</a></dd>
        </dl>
    </div>
    <!--分类筛选 结束-->

    <!--推荐品牌 开始-->
    <div class="rec_brand_list">
        <ul>
            <li><a href="/lsbrand/lpdrfood/27.shtml" target="_blank" title="老婆大人加盟" class="pic"><img src="/images/thread/2016/10/17/a177898a3976604ba4917550d2e53ec0.jpg" alt="老婆大人加盟"><em>老婆大人加盟</em></a></li>
        </ul>
    </div>
    <!--推荐品牌 结束-->

    <!--左边 开始-->
    <div class="w910">
        <div class="order_item">
            <div class="order_item_l">
                <a class="cur" href="#">默认排序</a>
                <a href="#">金额排序<i class="up"></i><!--<i class="down"></i>--></a>
            </div>
            <div class="order_item_r">共找到<span>8</span>个零食品牌加盟项目</div>
        </div>

        <!--列表 开始-->
        <div class="brand_list" id="productBox">
            @foreach($pagelists as $pagelist)
            <div class="brand_list_item">
                <div class="pro-Img fl">
                    <a target="_blank" href="{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" class="pp-pic-name" title="{{$pagelist->shorttitle}}"><img src="{{$pagelist->litpic}}" alt="{{$pagelist->shorttitle}}"></a>
                    <p class="pro_p">{!! strip_tags($pagelist->description) !!}</p>
                </div>
                <div class="indrouce-r fl">
                    <div class="list list-one">
                        <a target="_blank" href="{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->shorttitle}}"><h3 class="list-Name fl">{{$pagelist->shorttitle}}</h3></a>
                        <span class="money fr h4">投资额度：&nbsp;<em class="red">5~10万</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">上海</em>&nbsp;&nbsp;</span>
                    </div>
                    <div class="list list-two">
                        <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                        <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                        <span class="money fr h4">综合指数：&nbsp;<em class="red">10000</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">785</em>&nbsp;&nbsp;</span>
                    </div>
                    <div class="list-three">
                        <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                        <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                        <a href="/lsbrand/ysg/1.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                        <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro='{"pid":{{$pagelist->id}},"name":"{{$pagelist->shorttitle}}","pic":"{{$pagelist->litpic}}","url":"http://zf.qudao.com/xm/64806.html"}'>
						项目比一比</label></span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!--列表 结束-->

        <!--分页 开始-->
        <div class="page">
            <ul class="pagination">
                {!! $pagelists->links() !!}
            </ul>
        </div>
        <!--分页 结束-->
    </div>
    <!--左边 结束-->

    <!--右边 开始-->
    <div class="w260">
        <!--选择项目 开始-->
        <div class="choose">
            <div class="chooseTop">
                <p class="help-ask">没找到合适我的项目<img class="askBg" src="/reception/images/ask.png"> </p>
                <p class="tianxie">填写您的需求，让我来帮您！</p>
                <p> <a href="#" class="helpMe">帮我选项目</a> </p>
            </div>
            <div class="chooseBottom">
                <ul>
                    <li class="xuqiu1"><a>填写我的项目需求</a></li>
                    <li class="xuqiu2"><a>快、精、准帮您选择好项目</a></li>
                    <li class="xuqiu3"><a>创业有问题？帮您全面解答</a></li>
                </ul>
            </div>
        </div>
        <!--选择项目 结束-->

        <!--实时评价 开始-->
        <div class="new_comments">
            <div class="common_bt">
                <div class="tit">实时评价</div>
            </div>
            <div class="bd">
                <ul>
                    <li>
                        <p><em>纪雅琳</em><b>咨询</b><a target="_blank" href="#"><em>康比特</em></a></p>
                        <p class="txt-col">资讯商机...</p>
                    </li>
                    <li>
                        <p><em>纪雅琳</em><b>咨询</b><a target="_blank" href="#"><em>康比特</em></a></p>
                        <p class="txt-col">资讯商机...</p>
                    </li>
                    <li>
                        <p><em>马龙</em><b>咨询</b><a target="_blank" href="#"><em>嘉菲自酿啤酒</em></a></p>
                        <p class="txt-col">我想加盟此项目，请尽快电话联系我...</p>
                    </li>
                    <li>
                        <p><em>马龙</em><b>咨询</b><a target="_blank" href="#"><em>嘉菲自酿啤酒</em></a></p>
                        <p class="txt-col">我想加盟此项目，请尽快电话联系我...</p>
                    </li>
                    <li>
                        <p><em>马龙</em><b>咨询</b><a target="_blank" href="#"><em>嘉菲自酿啤酒</em></a></p>
                        <p class="txt-col">我想加盟此项目，请尽快电话联系我...</p>
                    </li>
                </ul>
            </div>
        </div>
        <!--实时评价 结束-->

        <div class="bn260"><a href="#" target="_blank"><img src="/reception/images/temp/bn6.jpg" width="260" height="295" alt=""/></a></div>

        <!--推荐文章 开始-->
        <div class="side_news">
            <div class="common_bt">
                <div class="tit">推荐文章</div>
            </div>
            <div class="common_list">
                <ul>
                    <li><a href="/lsbrand/baicaowei/42.shtml" target="_blank" title="111">111</a></li>
                    <li><a href="/lsbrand/ysg/3.shtml" target="_blank" title="一扫光零食怎么样">一扫光零食怎么样</a></li>
                </ul>
            </div>
        </div>

        <!--推荐文章 结束-->
    </div>
    <!--右边 结束-->




</div>
<!--主体结束-->
<!--比一比 begin-->
<div class="byb" id="bybLayer" style="display: none">
    <form action="/comparision/" method="post" target="_blank">
        <h2><em></em><span id="bybNumber">[<span id="Db_number">1</span>/3]</span>对比框</h2>
        <div class="byb-list" id="selectedplan"> </div>
        <div class="byb-ft"> <a href="javascript:void(0)" class="byb-submit" id="byb-submit">对比</a>
            <!--<input type="button" class="byb-submit" value="对比">-->
            <p><a style="cursor:pointer;" id="bybReset">清空对比栏</a></p>
        </div>
    </form>
</div>

<div class="tm_back"></div>
<!--遮罩层-->
<div class="tk_sty2"  id="limit-tips_un"> <!--提示框-->
    <h2><span>友情提示</span><i class="close"></i></h2>
    <p id="error"></p>
    <div class="tk_an"><em><a href="javascript:void(0);" class="close" >确定</a></em></div>
</div>
<script src="/reception/js/jquery.cookie.js"></script>
<script src="/reception/js/jquery.dialog.js"></script>
<script type="text/javascript">
    $(function(){
        var Obj = $.cookie('prosion');
        var proLayer = $("#bybLayer");
        var selectedplan = $("#selectedplan");
        if(Obj && Obj !='null'){
            selectedplan.append(Obj);
            $("#Db_number").text($('#selectedplan a').length);
            proLayer.show();
            if($('#selectedplan a').length>0){
                for(var i=0;i<=$('#selectedplan a').length;i++){
                    var checks = "Db_"+$('#selectedplan a').eq(i).attr('pid');
                    if($("#"+checks)){
                        $("#"+checks).attr('checked',true);
                    }
                }
            }
        }else{
            proLayer.hide();
        }
    });
    // 选择项目
    $(function(){
        var proBox = $("#productBox");
        var proLayer = $("#bybLayer");
        var selectedplan = $("#selectedplan");
        var bybNumber = $("#bybNumber");
        var bybReset = $("#bybReset");
        var suBtn = $(".byb-submit");
        proBox.delegate(".checkbox","change", function(){
            var $this = $(this);
            var data = $.parseJSON($(this).attr("data-pro"));
            if($('#selectedplan a').length<3 && $("#productBox .checkbox:checked").length<=3){
//            console.log($('#selectedplan a[pid="'+data.pid+'"]').length);
                if( $('#selectedplan a[pid="'+data.pid+'"]').length != 0 ){
                    $('#selectedplan a[pid="'+data.pid+'"]').remove();
                }else{
                    selectedplan.append('<a href="' + data.url + '" pid="' + data.pid + '" target="_blank" id="closebg_'+data.pid+'"><img src="' + data.pic + '"><em>' + data.name + '</em><input name="dataId_' + data.pid + '" type="hidden" value="' + data.pid + '"></a>');
                    var Obj = selectedplan.html();
                    $.cookie('prosion',Obj,{path:'/',domain:'zf.qudao.com'});
                    $("#Db_number").text($('#selectedplan a').length);
                    proLayer.show();
                }
                if(!$('#selectedplan a').length){proLayer.hide();}
            }else{
                var  value = [];
                $('#selectedplan a').each(function(){
                    value.push($(this).attr('pid'));
                });
                if(value.indexOf($this.attr('cid'))>=0){
                    $('#selectedplan a[pid="'+$this.attr('cid')+'"]').remove();
                    var Obj = selectedplan.html();
                    $.cookie('prosion',Obj,{path:'/',domain:'zf.qudao.com'});

                }else if($("#productBox .checkbox:checked").length>3){
                    $("#error").text("项目对比最多可选三个!");
                    $("#limit-tips_un").dialog();
                }



//            alert("项目对比最多可选三个!");
                $this.attr("checked",false);
            }

        });
        bybReset.bind("click", function(){
            selectedplan.html('');
            $.cookie('prosion',null,{path:'/',domain:'www.larcms.com'});
            proLayer.hide();
            $("#productBox .checkbox").attr("checked",false);
        });

        $('#byb-submit').click(function(){
            var url = "/comparision/";

            if($("#selectedplan a").length>=1){
                url+= $("#selectedplan a").eq(0).attr('pid')+"-";
            }else{
                url+= "0-";
            }
            if($("#selectedplan a").length>=2){
                url+= $("#selectedplan a").eq(1).attr('pid')+"-";
            }else{
                url+= "0-";
            }
            if($("#selectedplan a").length==3){
                url+= $("#selectedplan a").eq(2).attr('pid')+".shtml";
            }else{
                url+= "0.shtml";
            }
            window.location.href=url;
        });

    });
</script>
<!-- static:2016-10-11 14:31:55-->

@stop
