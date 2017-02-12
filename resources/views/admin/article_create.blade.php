@extends('admin.layouts.admin_app')
@section('title')
    添加文档
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
    <link href="/AdminLTE/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/AdminLTE/plugins/iCheck/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/AdminLTE//plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="/AdminLTE/plugins/datepicker/datepicker3.css">

    <!--<link href="/AdminLTE/plugins/summernote/summernote-bs3.css" rel="stylesheet">-->
    <link href="http://ysgtj.ysg1717.com/assets/css/fileinput.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

@stop
@section('content')
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-envelope bg-blue"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">文章基本信息|</a> 按需填写</h3>

                            <div class="timeline-body basic_info">
                                <div class="form-group col-md-12">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">文章标题</label>
                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="title" placeholder="文章标题">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">自定义文档属性</label>
                                    <div class="checkbox" style="margin-top: 0px;">
                                        <label>
                                            <input type="checkbox" name="flags[]" value="h" class="flat-red"> 头条
                                        </label>
                                        <label>
                                            <input type="checkbox" name="flags[]" value="p" class="flat-red"> 图片
                                        </label>
                                        <label>
                                            <input type="checkbox" name="flags[]" value="c" class="flat-red"> 推荐
                                        </label>
                                        <label>
                                            <input type="checkbox" name="flags[]" value="f" class="flat-red"> 幻灯
                                        </label>
                                        <label>
                                            <input type="checkbox" name="flags[]" value="s" class="flat-red"> 滚动
                                        </label>
                                        <label>
                                            <input type="checkbox" name="flags[]" value="a" class="flat-red"> 特荐
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">简略标题 </label>
                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control"  placeholder="短标题" name="shorttitle">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">tag标签</label>
                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                        <input type="text"  id="tags" name="tags" class="form-control col-md-10" placeholder="文档tag标签"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">关键字</label>
                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                        <input type="text" name="keywords" id="keywords" class="form-control col-md-10" placeholder="文档关键词"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">经纬度</label>
                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="country" class="form-control col-md-10" placeholder="填写地区名称即可"/>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 ">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">文章状态</label>
                                    <div class="radio col-md-4 col-sm-9 col-xs-12">
                                        <input type="radio" class="flat-red" name="iCheck" checked value="1"> 已审核
                                        <input type="radio" class="flat-red" name="iCheck" value="0"> 未审核
                                    </div>

                                </div>
                                <div class="form-group col-md-12 ">
                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">预选发布时间</label>
                                    <div class="input-group date  col-md-4 col-sm-9 col-xs-12">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>


                                </div>
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-xs">Read more</a>
                                <a class="btn btn-danger btn-xs">Delete</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-user bg-aqua"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                            <h3 class="timeline-header no-border"><a href="#">缩略图处理</a> 图片上传</h3>
                            <div class="timeline-body">
                                <input id="input-2" name="image" type="file" class="file col-md-10" multiple data-show-upload="false" data-show-caption="true">
                            </div>
                        </div>


                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-comments bg-yellow"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">产品信息</a> 产品信息描述</h3>

                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">图集处理</a> 批量上传图集</h3>

                            <div class="timeline-body">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-video-camera bg-maroon"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>

                            <h3 class="timeline-header"><a href="#">文档处理</a>文章内容编辑</h3>

                            <div class="timeline-body">
                                @include('admin.layouts.summernote')
                                <div style="display: none"><textarea  name="textareacontent" id="lawsContent"></textarea></div>
                            </div>
                            <div class="timeline-footer">
                                <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
                </ul>
            </div>
            <!-- /.col -->
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
    <!-- AdminLTE for demo purposes -->
    <script src="/AdminLTE/dist/js/demo.js"></script>
    <script src="/AdminLTE/plugins/summernote/summernote.min.js"></script>
    <script src="/AdminLTE/plugins/summernote/lang/summernote-zh-CN.js"></script>
    <!-- iCheck -->
    <script src="/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <script src="/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>


    <script>



        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#summernote').summernote({
                height: 500,
                lang : 'zh-CN',
                callbacks: {
                    onImageUpload: function(files) {
                        //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                        var formData = new FormData();
                        formData.append('file',files[0]);
                        $.ajax({
                            type: 'POST',
                            url : '/upload/images/thread',//后台文件上传接口
                            data : formData,
                            enctype: 'multipart/form-data',
                            processData : false,
                            contentType : false,
                            success: function(filename) {
                                var file_path ='/images/thread/'+ filename;
                                console.log(file_path);
                                $('#summernote').summernote("insertImage", file_path);
                            }
                        });
                    },
                    onChange: function(contents, $editable) {
                        // console.log('onChange:', contents, $editable);
                        $("#lawsContent").val(contents)
                        console.log($("#lawsContent").val())
                    },
                }
            });



        })

    </script>

    <script>
        $(function () {
            $('#datepicker').datepicker({
                autoclose: true
            });

            //iCheck for checkbox and radio inputs
            $('.basic_info input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('.basic_info input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('.basic_info input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });


        });
    </script>

    <!-- /Custom Notification -->
    <script src="/js/fileinput.min.js"></script>
@stop

