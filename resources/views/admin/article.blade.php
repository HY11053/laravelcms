@extends('admin.layouts.admin_app')
@section('title')
    网站文档列表
@stop
@section('head')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/AdminLTE/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/AdminLTE/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

@stop
@section('content')

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">文档列表管理</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>文章标题</th>
                                <th>栏目</th>
                                <th>发布时间</th>
                                <th>发布人</th>
                                <th>点击</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td>李小璐女王范儿十足激情首发 湖南卫视喜乐会</td>
                                <td>测试栏目</td>
                                <td>11-7-2014</td>
                                <td>John Doe</td>
                                <td>172</td>
                                <td>已审核</td>
                                <td><span class="label label-success">预览</span><span class="label label-warning">编辑</span><span class="label label-danger">删除</span></td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>李小璐女王范儿十足激情首发 湖南卫视喜乐会</td>
                                <td>测试栏目</td>
                                <td>11-7-2014</td>
                                <td>John Doe</td>
                                <td>172</td>
                                <td>已审核</td>
                                <td><span class="label label-success">预览</span><span class="label label-warning">编辑</span><span class="label label-danger">删除</span></td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>李小璐女王范儿十足激情首发 湖南卫视喜乐会</td>
                                <td>测试栏目</td>
                                <td>11-7-2014</td>
                                <td>John Doe</td>
                                <td>172</td>
                                <td>已审核</td>
                                <td><span class="label label-success">预览</span><span class="label label-warning">编辑</span><span class="label label-danger">删除</span></td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>李小璐女王范儿十足激情首发 湖南卫视喜乐会</td>
                                <td>测试栏目</td>
                                <td>11-7-2014</td>
                                <td>John Doe</td>
                                <td>172</td>
                                <td>已审核</td>
                                <td><span class="label label-success">预览</span><span class="label label-warning">编辑</span><span class="label label-danger">删除</span></td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

    <!-- /.content -->
@stop

@section('libs')
    <!-- jQuery 2.2.3 -->
    <script src="/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/AdminLTE/dist/js/demo.js"></script>
@stop

