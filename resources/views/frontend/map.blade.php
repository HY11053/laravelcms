@extends('frontend.frontend')
@section('title') 关于我们@stop
@section('keywords') 关于我们 @stop
@section('description')  关于我们 @stop
@section('headlibs')
    <link rel="stylesheet" type="text/css" href="/reception/css/news.css"/>
@stop
@section('main_content')
    <!--主体开始-->
    <div class="main clearfix">
        <!--左侧开始-->
        <div class="about_l">
            <div class="hd"></div>
            <div class="bd">
                <ul>
                    <li class="cur"><a href="about.html" target="_blank">关于我们</a></li>
                    <li><a href="law.html" target="_blank">法律声明</a></li>
                    <li><a href="map.html" target="_blank">网站地图</a></li>
                    <li><a href="contact.html" target="_blank">联系我们</a></li>
                </ul>
            </div>
        </div>
        <!--左侧结束-->

        <!--右侧开始-->
        <div class="about_r">
            <div class="hd">网站地图</div>
            <div class="bd">
                <div class="about_map">
                    <dl>
                        <dt><a href="/fzxm/" target="_blank" title="服饰鞋包">服饰鞋包</a></dt>
                        <dd><a href="/nanzhuang/" target="_blank" title="男装">男装</a></dd>
                        <dd><a href="/nvzhuang/" target="_blank" title="女装">女装</a></dd>
                        <dd><a href="/tongzhuangtongxie/" target="_blank" title="童装">童装</a></dd>
                        <dd><a href="/tongxie/" target="_blank" title="鞋包">鞋包</a></dd>

                        <dt><a href="/cyyl/" target="_blank" title="特色餐饮">特色餐饮</a></dt>
                        <dd><a href="/wugu/" target="_blank" title="五谷">五谷</a></dd>
                        <dd><a href="/hancanxiaochi/" target="_blank" title="韩餐">韩餐</a></dd>
                        <dd><a href="/shaokao/" target="_blank" title="烧烤">烧烤</a></dd>
                        <dd><a href="/baozi/" target="_blank" title="包子">包子</a></dd>
                        <dd><a href="/malaxiangguo/" target="_blank" title="麻辣香锅">麻辣香锅</a></dd>
                        <dd><a href="/xiaochi/" target="_blank" title="小吃">小吃</a></dd>
                        <dd><a href="/xinxianchayin/" target="_blank" title="茶饮">茶饮</a></dd>
                        <dd><a href="/mianguan/" target="_blank" title="面馆">面馆</a></dd>
                        <dd><a href="/tianpin/" target="_blank" title="甜品">甜品</a></dd>
                        <dd><a href="/zhongshikuaican/" target="_blank" title="中餐">中餐</a></dd>
                        <dd><a href="/bingqilin/" target="_blank" title="冰淇淋">冰淇淋</a></dd>
                        <dd><a href="/zhajixiaochi/" target="_blank" title="炸鸡">炸鸡</a></dd>
                        <dd><a href="/waguang/" target="_blank" title="瓦罐">瓦罐</a></dd>
                        <dd><a href="/pisajiameng/" target="_blank" title="披萨">披萨</a></dd>
                        <dd><a href="/huoguoshaokao/" target="_blank" title="烤鱼">烤鱼</a></dd>
                        <dd><a href="/xishikuaican/" target="_blank" title="西餐">西餐</a></dd>
                        <dd><a href="/canyiqita/" target="_blank" title="其它">其它</a></dd>
                        <dd><a href="/huoguo/" target="_blank" title="火锅">火锅</a></dd>

                        <dt><a href="/mrhz/" target="_blank" title="美容养生">美容养生</a></dt>
                        <dd><a href="/hufu/" target="_blank" title="护肤">护肤</a></dd>
                        <dd><a href="/meirong/" target="_blank" title="美容">美容</a></dd>
                        <dd><a href="/huazhuangpin/" target="_blank" title="化妆品">化妆品</a></dd>
                        <dd><a href="/yanjingdian/" target="_blank" title="眼镜店">眼镜店</a></dd>
                        <dd><a href="/yangsheng/" target="_blank" title="养生">养生</a></dd>

                        <dt><a href="/splp/" target="_blank" title="饰品玩具">饰品玩具</a></dt>
                        <dd><a href="/ertongwanju/" target="_blank" title="玩具">玩具</a></dd>
                        <dd><a href="/ertongleyuan/" target="_blank" title="儿童乐园">儿童乐园</a></dd>
                        <dd><a href="/shipin/" target="_blank" title="饰品">饰品</a></dd>
                        <dd><a href="/shipinqita/" target="_blank" title="其它">其它</a></dd>

                        <dt><a href="/jjjc/" target="_blank" title="家居装饰">家居装饰</a></dt>
                        <dd><a href="/shishangdengshi/" target="_blank" title="灯饰">灯饰</a></dd>
                        <dd><a href="/jiajujiancai/" target="_blank" title="建材">建材</a></dd>
                        <dd><a href="/xiaojiadian/" target="_blank" title="小家电">小家电</a></dd>
                        <dd><a href="/qiangyi/" target="_blank" title="墙艺">墙艺</a></dd>
                        <dd><a href="/bolihua/" target="_blank" title="玻璃画">玻璃画</a></dd>
                        <dd><a href="/jiajuqita/" target="_blank" title="其它">其它</a></dd>
                        <dd><a href="/diban/" target="_blank" title="地板">地板</a></dd>
                        <dd><a href="/jiajuyongpin/" target="_blank" title="家装">家装</a></dd>
                        <dd><a href="/jiashi/" target="_blank" title="家饰">家饰</a></dd>
                        <dd><a href="/chufangweiyu/" target="_blank" title="厨卫">厨卫</a></dd>

                        <dt><a href="/hbfw/" target="_blank" title="节能环保">节能环保</a></dt>
                        <dd><a href="/qichemeirong/" target="_blank" title="汽车美容">汽车美容</a></dd>
                        <dd><a href="/jieneng/" target="_blank" title="节能">节能</a></dd>
                        <dd><a href="/kongqihuanbao/" target="_blank" title="空气环保">空气环保</a></dd>
                        <dd><a href="/jinghua/" target="_blank" title="净化">净化</a></dd>
                        <dd><a href="/huanbao/" target="_blank" title="室内环保">室内环保</a></dd>
                        <dd><a href="/jienengdianqi/" target="_blank" title="节能电器">节能电器</a></dd>
                        <dd><a href="/dianchixiufu/" target="_blank" title="电池修复">电池修复</a></dd>
                        <dd><a href="/diandongche/" target="_blank" title="电动车">电动车</a></dd>
                        <dd><a href="/qicheyongpin/" target="_blank" title="汽车用品">汽车用品</a></dd>
                        <dd><a href="/jienengqita/" target="_blank" title="其它">其它</a></dd>

                        <dt><a href="/qt/" target="_blank" title="新锐连锁">新锐连锁</a></dt>
                        <dd><a href="/jiaoyufenxiao/" target="_blank" title="分销平台">分销平台</a></dd>
                        <dd><a href="/jiaoyuj/" target="_blank" title="教育">教育</a></dd>
                        <dd><a href="/jiaoyuqita/" target="_blank" title="其他">其他</a></dd>
                    </dl>
                </div>
            </div>
        </div>
        <!--右侧结束-->
    </div>
    <!--主体结束-->

@stop