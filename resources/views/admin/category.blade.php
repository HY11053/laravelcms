@extends('admin.layouts.admin_app')
@section('title')网站栏目管理@stop
@section('head')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<style>
    .spide_span{display: inline-block; float: right; margin-right: 20px;}
    .spide_span span{padding: 5px; margin-left: 5px; font-weight: 400; cursor: pointer;}
</style>
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
            @foreach($topnavs as $key=>$topnav)
            <div class="box box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title ">{{$topnav}} </h3>
                    <div class="spide_span">
                        <span class="label label-primary pull-right">12</span>
                        <span class="label label-danger pull-right" data-toggle="modal" data-target=".modal-sm{{$key}}">删除</span>
                        <div class="modal fade modal-sm{{$key}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel{{$key}}">
                            <div class="modal-dialog modal-sm modal-s-m{{$key}}" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h5 class="modal-title" id="mySmallModalLabel{{$key}}">是否要删除栏目</h5>
                                    </div>
                                    <div class="modal-body">
                                        {{$topnav}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
                                        <button type="button" class="btn btn-primary" id="btn-{{$key}}" onclick="AjDelete({{$key}},'modal-s-m{{$key}}')">删除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="label label-success pull-right" onclick="link({{$key}},'admin/category/edit')">编辑</span>
                        <span class="label label-warning pull-right" onclick="link({{$key}},'admin/category/create')">添加子类</span>
                    </div>

                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                @if(isset($recursivestypeinfos[$key]))
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            @foreach($recursivestypeinfos as $keys=>$recursivestypeinfo)
                                @if($key==$keys)
                                        @if(is_array($recursivestypeinfo))
                                         {{Recursivestypeinfos($recursivestypeinfo)}}
                                        @endif



                            @endif
                                    @endforeach
                        </ul>
                    </div>
            @endif
            <!-- /.box-body -->

            </div>
            @endforeach
        </div>

    </div>
    <!-- /.row -->
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

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
        function link($id,$action) {
            window.location.href='/'+$action+'/'+$id;
        }

        function AjDelete (id,node) {
            var id = id;
            var node=node;
           $.ajax({
                    //提交数据的类型 POST GET
                    type:"POST",
                    //提交的网址
                    url:"/admin/category/delete/"+id,
                    //提交的数据
                    data:{"id":id,'node':node},
                    //返回数据的格式
                    datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                    success:function (response, stutas, xhr) {
                        $(".modal-s-m"+id+" .modal-body").html(response);
                        $("#btn-"+id).attr("disabled","disabled");

                    }
                });






        }

    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="/AdminLTE/dist/js/demo.js"></script>
@stop

