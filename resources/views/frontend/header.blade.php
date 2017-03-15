@inject('headers',App\Header')
<!--header 开始-->
<div class="header">
    <div class="top">
        <div class="inner">
            <div class="top_l">您好，欢迎访问零食加盟网！</div>
            <div class="top_r">
                <div class="tel">7*24小时免费直拨 400-618-1717</div>
                <div class="add_wx" id="js_add_wx">
                    <img src="/reception/images/wx_link.jpg" width="76" height="22" alt="官方微信"/>
                    <div class="wx_drop_down">
                        <img src="/reception/images/wx_qrcode.png" alt="微信二维码"/>
                    </div>
                </div>
                <div class="add_wb">
                    <iframe scrolling="no" allowtransparency="true" marginwidth="0" marginheight="0" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&amp;width=63&amp;height=24&amp;uid=3083675110&amp;style=1&amp;btn=light&amp;dpc=1" frameborder="0" height="24" width="63"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="header_box_wrap">
        <div class="header_box">
            <div class="logo"><a href="/" target="_blank"><img src="/reception/images/logo.jpg" alt="零食加盟网"/></a></div>
            <!--搜索 开始-->
            <div class="search">
                <div class="search_tab">
                    <ul>
                        <li class="cur">找商机</li>
                        <li><a href="/search/all_1_5_0.shtml" target="_blank">5万以下</a></li>
                        <li><a href="/search/all_5_10_0.shtml" target="_blank">5-10万</a></li>
                        <li><a href="/search/all_10_20_0.shtml" target="_blank">10-20万</a></li>
                        <li><a href="/search/all_20_50_0.shtml" target="_blank">20-50万</a></li>
                    </ul>
                </div>
                <div class="search_box">
                    <form action="/search/" method="get">
                        <input type="text" onblur="if (this.value == '') {this.value = this.attributes['def'].value;this.className='search_input';}" onfocus="if (this.value == this.attributes['def'].value) {this.value='';this.className='search_input1';}" def="想找什么项目？" class="search_input" value="想找什么项目？" name="search">
                        <input type="submit" class="search_btn" value="搜索">
                    </form>
                </div>
            </div>
            <!--搜索 结束-->

            <!--快速链接 开始-->
            <div class="quick_btn">
                <ul>
                    <li>
                        <a href="/paihangbang"><i class="icon1"></i><span class="tit">排行榜</span></a>
                    </li>
                    <li>
                        <a href="/search"><i class="icon2"></i><span class="tit">项目搜索</span></a>
                    </li>
                    <li>
                        <a href="/lsbrand"><i class="icon3"></i><span class="tit">品牌大全</span></a>
                    </li>
                    <li>
                        <a href="/ask"><i class="icon4"></i><span class="tit">加盟问答</span></a>
                    </li>
                </ul>
            </div>
            <!--快速链接 结束-->
        </div>
    </div>

    <!--导航 开始-->
    <div class="nav">
        <div class="inner">
            <ul class="nav_list">
                <li class="cur"><a href="/" >首页</a></li>
                @foreach($headers->HeaderLists() as $real_path=>$header)

                <li><a href="/{{$real_path}}/" >{{$header}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sub_nav">
        <dl>
            <dt class="icon1"><a href="#" target="_blank">零食加盟品牌大全</a></dt>
            <dd><a href="/lsbrand/3school/" target="_blank" title="三只松鼠">三只松鼠</a></dd>
            <dd><a href="/lsbrand/ysg/" target="_blank" title="一扫光">一扫光</a></dd>
            <dd><a href="/lsbrand/lppz/" target="_blank" title="良品铺子">良品铺子</a></dd>
            <dd><a href="/lsbrand/lpdrfood/" target="_blank" title="老婆大人">老婆大人</a></dd>
            <dd><a href="/lsbrand/yanjinpuzi/" target="_blank" title="盐津铺子">盐津铺子</a></dd>
            <dd><a href="/lsbrand/baiweilin/" target="_blank" title="百味林">百味林</a></dd>
            <dd><a href="/lsbrand/baicaowei/" target="_blank" title="百草味">百草味</a></dd>
            <dd><a href="/lsbrand/lingshiduo/" target="_blank" title="零食多">零食多</a></dd>
            <dd><a href="/lsbrand/youbaijia/" target="_blank" title="悠百佳">悠百佳</a></dd>
            <dd><a href="/lsbrand/yiweier/" target="_blank" title="伊味儿">伊味儿</a></dd>
        </dl>
        <dl class="dl_wid1">
            <dt class="icon2"><a href="#" target="_blank" >干果店加盟品牌</a></dt>
            <dd><a href="/chaohuodian/5.shtml" target="_blank" title="傻子瓜子">傻子瓜子</a></dd>
            <dd><a href="/chaohuodian/6.shtml" target="_blank" title="好想你枣">好想你枣</a></dd>
            <dd><a href="/chaohuodian/7.shtml" target="_blank" title="喜郎儿">喜郎儿</a></dd>
            <dd><a href="/chaohuodian/8.shtml" target="_blank" title="戴永红">戴永红</a></dd>
            <dd><a href="/chaohuodian/9.shtml" target="_blank" title="金大妈">金大妈</a></dd>
            <dd><a href="/chaohuodian/10.shtml" target="_blank" title="崩豆张">崩豆张</a></dd>
            <dd><a href="/chaohuodian/11.shtml" target="_blank" title="一品香">一品香</a></dd>
            <dd><a href="/chaohuodian/12.shtml" target="_blank" title="大山合">大山合</a></dd>
            <dd><a href="/chaohuodian/13.shtml" target="_blank" title="粒上皇">粒上皇</a></dd>
            <dd><a href="/chaohuodian/14.shtml" target="_blank" title="核工记">核工记</a></dd>
        </dl>
        <dl class="dl_wid1">
            <dt class="icon3"><a href="#" target="_blank">进口零食品牌加盟</a></dt>

            <dd><a href="/jinkoulingshi/15.shtml" target="_blank" title="万国码头">万国码头</a></dd>

            <dd><a href="/jinkoulingshi/16.shtml" target="_blank" title="舌间味">舌间味</a></dd>

            <dd><a href="/jinkoulingshi/17.shtml" target="_blank" title="非常味道">非常味道</a></dd>

            <dd><a href="/jinkoulingshi/18.shtml" target="_blank" title="自由自在">自由自在</a></dd>

            <dd><a href="/jinkoulingshi/19.shtml" target="_blank" title="百比佳">百比佳</a></dd>

            <dd><a href="/jinkoulingshi/20.shtml" target="_blank" title="甜蜜小筑">甜蜜小筑</a></dd>

            <dd><a href="/jinkoulingshi/21.shtml" target="_blank" title="优之良品">优之良品</a></dd>

            <dd><a href="/jinkoulingshi/22.shtml" target="_blank" title="妮当家">妮当家</a></dd>

            <dd><a href="/jinkoulingshi/23.shtml" target="_blank" title="优客龙">优客龙</a></dd>

            <dd><a href="/jinkoulingshi/24.shtml" target="_blank" title="莫丽食品">莫丽食品</a></dd>
        </dl>

    </div>
    <!--导航 结束-->
</div>
<!--header 结束-->