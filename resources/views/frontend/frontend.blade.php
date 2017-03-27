<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')_零食加盟网</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/reception/css/style.css" rel="stylesheet" type="text/css" />
    @yield('headlibs')
    <script type="text/javascript" src="/reception/js/jquery.min.js"></script>
    <script type="text/javascript" src="/reception/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/reception/js/index.js"></script>
</head>

<body>
@include('frontend.header')
@yield('main_content')
<!--footer开始-->
<div class="footer">
    <div class="footer_nav"><a href="/about">关于我们</a>　|　<a href="/service">企业服务</a>　|　<a href="#">人才招聘</a>　|　<a href="#">联系我们</a>　|　<a href="#">合作客户</a>　|　<a href="/law">法律声明</a>　|　<a href="#">友情链接</a>　|　<a href="#">服务导航</a>　|　<a href="/sitemap.xml">网站地图</a>　|　<a href="/sitemap">小行业地图</a>　|　<a href="#">加盟导航 sitemap</a></div>

    <div class="copyright">
        <p>零食加盟网友情提示：多打电话、多咨询、实地考察，可降低投资风险！</p>
        <p>Copyright © 2015 www.lingshijm.com Corporation, All Rights Reserved 上海佐赛网络科技有限公司 版权所有</p>
        <p>沪ICP备14037163号-32</p>
    </div>
    <div class="cert"><img src="/reception/images/cert.jpg" alt="信用保障"/></div>
    <div class="wx"><img src="/reception/images/logo_wx.jpg" alt="微信"/></div>
</div>
<script type="text/javascript" src="/reception/js/search_ajax.js"></script>
<!--footer结束-->
<script src="/reception/js/comment.js"></script>
</body>
</html>
