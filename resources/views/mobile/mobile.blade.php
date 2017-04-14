<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <link rel="stylesheet" type="text/css" href="/mobiles/css/css.css">
    <script type="text/javascript" src="/mobiles/js/jquery.min.js"></script>
    <script type="text/javascript" src="/mobiles/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/mobiles/js/index.js"></script>
    <title>零食加盟网</title>
</head>

<body>
<div class="viewport">
    <!--header开始-->
    <div class="header">
        <p class="title"><img src="/mobiles/images/logo.png" alt="零食加盟网"/></p>
        <p class="mcate"><b>分类</b></p>
        <div class="d_nav">
            <ul>
                <li><a href="#">餐饮</a></li>
                <li><a href="#">游乐</a></li>
                <li><a href="#">服务</a></li>
                <li><a href="#">母婴</a></li>
                <li><a href="#">珠宝</a></li>
                <li><a href="#">零售</a></li>
                <li><a href="#">服装</a></li>
                <li><a href="#">更多</a></li>
            </ul>
        </div>
    </div>
    <!--header结束-->

    <!--搜索开始-->
    <div class="search">
        <input type="text" name="keyword" class="search_txt" maxlength="18" id="keyword" value="输入您要找的项目">
        <a type="submit" class="search_btn"></a>
    </div>
    <!--搜索结束-->

    <!--幻灯片开始-->
    <div id="focus" class="focus">
        <div class="hd">
            <ul>
            </ul>
        </div>
        <div class="bd">
            <ul>
                <li><a href="#"><img _src="/mobiles/images/temp/bn1.jpg" src="/mobiles/images/blank.png" /></a></li>
                <li><a href="#"><img _src="/mobiles/images/temp/bn2.jpg" src="/mobiles/images/blank.png"/></a></li>
                <li><a href="#"><img _src="/mobiles/images/temp/bn3.jpg" src="/mobiles/images/blank.png"/></a></li>
                <li><a href="#"><img _src="/mobiles/images/temp/bn4.jpg" src="/mobiles/images/blank.png"/></a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        TouchSlide({
            slideCell:"#focus",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell:".bd ul",
            effect:"left",
            autoPlay:true,//自动播放
            autoPage:true, //自动分页
            switchLoad:"_src" //切换加载，真实图片路径为"_src"
        });
    </script>
    <!--幻灯片结束-->
@yield('main_content')
<!--在线留言开始-->
    <div class="index_message">
        <div class="message_tit"><span>在线留言</span><em>(客服将第一时间给您回电)</em></div>
        <div class="mfdh clearfix">
            <form >
                <ul>
                    <li>
                        <label class="p-tips">姓名：</label>
                        <input name="fullname" type="text"  class="name" placeholder="如 王先生" value="">
                    </li>
                    <li>
                        <label class="p-tips">手机：</label>
                        <input name="phone" type="text" class="name" placeholder="如 13888888888" value="">
                    </li>
                    <li>
                        <label class="p-tips">留言：</label>
                        <textarea class="txt" name="message" cols="" rows="" placeholder="我对此项目很感兴趣，请联系我。"></textarea>
                    </li>
                </ul>
                <input name="" type="submit" class="anniu" value="立即提交留言">
            </form>
        </div>
    </div>
    <!--在线留言结束-->
    <!--footer开始-->
    <div class="footer">
        <div class="footer_nav">
            <a href="/msitemap.xml">网站地图</a>|<a href="/about/">关于我们</a>|<a href="#">免责声明</a>|<a href="#">电脑版</a>
        </div>
        <div class="copyright">
            <p>零食加盟网 沪ICP备14037163号-46</p>
            <p>上海佐赛网络科技有限公司</p>
        </div>
    </div>
    <!--footer结束-->
</div>

<!--底部固定导航 开始-->
<div class="fixed_nav">
    <ul>
        <li>
            <a href="index.html">
                <i class="icon1"></i>
                <p>首页</p>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i class="icon2"></i>
                <p>在线咨询</p>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" id="js_popup">
                <i class="icon3"></i>
                <p>快速留言</p>
            </a>
        </li>
    </ul>
</div>
<!--底部固定导航 结束-->

<!--弹窗 在线留言 开始-->
<div class="popup_mask">
    <div class="popup">
        <div class="hd">
            <span class="tit">快速留言</span>
            <em>(客服将第一时间给您回电)</em>
            <a class="popup_close" href="#">关闭</a>
        </div>
        <div class="bd">
            <ul>
                <li>
                    <label for="msg_name" class="label">姓名：</label>
                    <input id="msg_name" class="input_bk" type="text" name="msg_name" value="" placeholder="如 万先生">
                </li>
                <li>
                    <label for="msg_phone" class="label">手机：</label>
                    <input id="msg_phone" class="input_bk" type="text" name="msg_phone" value="" placeholder="如 13888888888">
                </li>
                <li>
                    <label for="msg_cont" class="label">留言：</label>
                    <textarea id="msg_cont" class="textarea_bk" type="text" name="msg_cont" value="" placeholder="我对此项目很感兴趣，请联系我。"></textarea>
                </li>
                <li>
                    <input type="submit" value="立即提交留言" class="btn">
                </li>
            </ul>
        </div>
    </div>
</div>
<!--弹窗 在线留言 结束-->
</body>
</html>
