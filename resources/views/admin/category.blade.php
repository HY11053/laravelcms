@extends('admin.layouts.admin_app')
@section('title')网站栏目管理@stop
@section('head')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/AdminLTE/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/AdminLTE/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="/AdminLTE/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/fullcalendar/fullcalendar.print.css" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/AdminLTE/plugins/iCheck/flat/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-primary btn-block margin-bottom nleft"><span style="color: #ffffff">网站栏目管理</span> <a href="{{route('category_create')}}" style="color: #ffffff; display: inline-block; float: right;">添加栏目</a></div>
            @foreach($topnavs as $topnav)
            <div class="box box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$topnav}}</h3>

                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                                <span class="label label-primary pull-right">12</span><span class="label label-danger pull-right">删除</span> <span class="label label-success pull-right">编辑</span> <span class="label label-warning pull-right">添加子类</span></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> Sent
                                <span class="label label-primary pull-right">12</span><span class="label label-danger pull-right">删除</span> <span class="label label-success pull-right">编辑</span> <span class="label label-warning pull-right">添加子类</span></a>
                            <div class="box box-solid collapsed-box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">子级栏目</h3>

                                    <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-body no-padding">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                                                <span class="label label-primary pull-right">12</span></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                                        <div class="box box-solid collapsed-box">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">子级栏目</h3>

                                                <div class="box-tools">
                                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box-body no-padding">
                                                <ul class="nav nav-pills nav-stacked">
                                                    <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox
                                                            <span class="label label-primary pull-right">12</span><span class="label label-danger pull-right">删除</span> <span class="label label-success pull-right">编辑</span> <span class="label label-warning pull-right">添加子类</span></a></li>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                                                    <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                                                    <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                                        <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                                    </ul>
                                </div>
                                </div>
                        </li>
                        <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                        <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            @endforeach
            <!-- /. box -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Labels</h3>

                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->
    </section>
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
    <!-- iCheck -->
    <script src="/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <!-- Page Script -->
    <script>
        $(function () {
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            $('.mailbox-messages input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });

            //Enable check and uncheck all functionality
            $(".checkbox-toggle").click(function () {
                var clicks = $(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                    $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("check");
                    $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
                }
                $(this).data("clicks", !clicks);
            });

            //Handle starring for glyphicon and font awesome
            $(".mailbox-star").click(function (e) {
                e.preventDefault();
                //detect type
                var $this = $(this).find("a > i");
                var glyph = $this.hasClass("glyphicon");
                var fa = $this.hasClass("fa");

                //Switch states
                if (glyph) {
                    $this.toggleClass("glyphicon-star");
                    $this.toggleClass("glyphicon-star-empty");
                }

                if (fa) {
                    $this.toggleClass("fa-star");
                    $this.toggleClass("fa-star-o");
                }
            });
        });
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="/AdminLTE/dist/js/demo.js"></script>
@stop

