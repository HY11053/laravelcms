<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth('admin')->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">主管理界面</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-file-text"></i> <span>核心操作</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/category')class="active"@endif><a href="/admin/category" ><i class="fa fa-circle-o"></i> 网站栏目管理</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article')class="active" @endif><a href="/admin/article"><i class="fa fa-circle-o"></i> 所有档案列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/ownership')class="active" @endif><a href="/admin/article/ownership"><i class="fa fa-circle-o"></i> 我发布的文档</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/pendingaudit')class="active" @endif><a href="/admin/article/pendingaudit"><i class="fa fa-circle-o"></i> 等待审核文档</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/pedingpublished')class="active" @endif><a href="/admin/article/pedingpublished"><i class="fa fa-circle-o"></i> 待发布的文档</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-commenting"></i>
                    <span>问答及评论管理</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">5</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/ask')class="active"@endif><a href="/admin/ask"><i class="fa fa-circle-o"></i> 问答列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/ask/add')class="active"@endif><a href="/admin/ask/add"><i class="fa fa-circle-o"></i> 添加问题</a></li>
                    <li @if(Request::getRequestUri()=='/admin/ask/add')class="active"@endif><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> 待审核问答</a></li>
                    <li @if(Request::getRequestUri()=='/admin/ask/add')class="active"@endif><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> 评论列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/ask/add')class="active"@endif><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> 待审核评论</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-random"></i> <span>友情链接管理</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/flink')class="active"@endif><a href="/admin/flink"><i class="fa fa-circle-o"></i> 友情链接列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/flink/create')class="active"@endif><a href="/admin/flink/create"><i class="fa fa-circle-o"></i> 添加友情链接</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>杂项管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/makesitemap')class="active"@endif><a href="/admin/makesitemap"><i class="fa fa-circle-o"></i>XML地图生成</a></li>
                    <li @if(Request::getRequestUri()=='/admin/phone')class="active"@endif><a href="/admin/phone"><i class="fa fa-circle-o"></i> 电话提交管理</a></li>
                    <li @if(Request::getRequestUri()=='/admin/makemsitemap')class="active"@endif><a href="/admin/makemsitemap"><i class="fa fa-circle-o"></i> 移动端地图生成</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i>
                    <span>系统用户管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/admin/regsiter')class="active"@endif><a href="/admin/admin/regsiter"><i class="fa fa-circle-o"></i> 添加用户</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/list')class="active"@endif><a href="/admin/admin/list"><i class="fa fa-circle-o"></i> 用户列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/userauth')class="active"@endif><a href="/admin/admin/userauth"><i class="fa fa-circle-o"></i>用户授权管理</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-wechat"></i> <span>微信公众平台</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/admin/useraut')class="active"@endif><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> 自定义菜单管理</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/useraut')class="active"@endif><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> 单图文消息</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/useraut')class="active"@endif><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> 多图文消息</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/useraut')class="active"@endif><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i>用户管理</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-wrench"></i> <span>系统设置</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/sysconfig')class="active"@endif><a href="/admin/sysconfig"><i class="fa fa-circle-o"></i> 站点核心设置</a></li>
                    <li @if(Request::getRequestUri()=='/admin/sysinfo')class="active"@endif><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> 系统运行信息</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/Atlas">
                    <i class="fa fa-photo"></i> <span>图集内容管理</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-angellist"></i> <span>SEO工具</span>
                    <small class="label pull-right bg-yellow">12</small>
                    <small class="label pull-right bg-green">16</small>
                    <small class="label pull-right bg-red">5</small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/searchkey')class="active"@endif><a href="/admin/searchkey"><i class="fa fa-circle-o"></i> 相关关键词采集</a></li>
                    <li @if(Request::getRequestUri()=='/admin/webinfo')class="active"@endif><a href="/admin/webinfo"><i class="fa fa-circle-o"></i> 站点信息查询</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>前台会员中心</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/userlist')class="active"@endif><a href="/admin/userlist"><i class="fa fa-circle-o"></i> 前台用户列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/useradd')class="active"@endif><a href="/admin/useradd"><i class="fa fa-circle-o"></i> 添加用户</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>功能待开发中</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>后台使用文档</span></a></li>
            <li class="header">员工考核管理</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>周工作总结</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>待办事项</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>未完成事项</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
