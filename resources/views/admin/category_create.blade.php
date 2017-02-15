@extends('admin.layouts.admin_app')
@section('title')
    网站栏目管理_添加栏目
    @stop
    @section('head')
            <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/skins/_all-skins.min.css">
    <link href="/AdminLTE/plugins/iCheck/all.css" rel="stylesheet">
    <link href="/AdminLTE/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/AdminLTE/plugins/iCheck/all.css" rel="stylesheet">
    <link href="http://ysgtj.ysg1717.com/assets/css/fileinput.css" rel="stylesheet">

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
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab">常规选项</a></li>
                    <li><a href="#timeline" data-toggle="tab">高级选项</a></li>
                    <li><a href="#activity" data-toggle="tab">栏目内容</a></li>
                </ul>
                {{Form::open(array('route' => 'category_create','files' => true,'class'=>"form-horizontal"))}}
                <div class="tab-content">
                    <div class="active tab-pane" id="settings">
                        <div style="margin-bottom: 15px;"></div>

                        <div class="form-group">
                         {{Form::label('typename', '栏目名称', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('typename', '', array('class' => 'form-control','id'=>'typename','placeholder'=>'栏目名称'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('typedir', '栏目路径', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('typedir', '', array('class' => 'form-control','id'=>'typedir','placeholder'=>'栏目路径'))}}
                            </div>
                        </div>

                        <div class="form-group  ">
                            {{Form::label('keywords', '目录相对位置', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5 basic_info">
                                {{Form::radio('dirposition', '1', true,array('class'=>"flat-red"))}} 站点根目录
                                {{Form::radio('dirposition', '0',false,array('class'=>"flat-red"))}} 上级目录
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('sortrank', '栏目排序', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('sortrank', '', array('class' => 'form-control','id'=>'sortrank','placeholder'=>'栏目排序'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('description', '栏目描述', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::textarea('description', '', array('class' => 'form-control','id'=>'description','placeholder'=>'栏目描述','cols'=>'','rows'=>''))}}

                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('title', '栏目标题', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('title', '', array('class' => 'form-control','id'=>'title','placeholder'=>'栏目标题'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('keywords', '栏目关键字', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('keywords', '', array('class' => 'form-control','id'=>'keywords','placeholder'=>'栏目关键字'))}}
                            </div>
                        </div>

                        <div class="form-group  ">
                            {{Form::label('keywords', '是否允许发布文档', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5 basic_info">
                                {{Form::radio('iCheck', '1', true,array('class'=>"flat-red"))}} 允许
                                {{Form::radio('iCheck', '0',false,array('class'=>"flat-red"))}} 不允许
                            </div>
                        </div>

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->

                        <ul class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-camera  bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                                    <h3 class="timeline-header no-border"><a href="#">缩略图处理</a> 图片上传</h3>
                                    <div class="timeline-body">
                                        {{Form::file('image', array('class' => 'file col-md-10','id'=>'input-2','multiple data-show-upload'=>"false",'data-show-caption'=>"true"))}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-camera bg-purple"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                    <h3 class="timeline-header"><a href="#">图集处理</a> 批量上传图集</h3>
                                    <div class="timeline-body">
                                        {{Form::file('image', array('name'=>'input-image','class' => 'file-loading','id'=>'input-image-1','accept'=>'image/*'))}}
                                        <div id="kv-success-modal" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Yippee!</h4>
                                                    </div>
                                                    <div id="kv-success-box" class="modal-body">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{Form::hidden('imagespic', '',array('id'=>'imagespic'))}}
                                    </div>
                                </div>
                            </li>
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                            </li>
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.tab-pane -->
                    <div class=" tab-pane" id="activity">
                        @include('admin.layouts.summernote')
                        <div style="display: none"><textarea  name="textareacontent" id="lawsContent"></textarea></div>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{Form:: button('提交',array('class'=>'btn btn-danger','type'=>'submit'))}}
                    </div>
                </div>
                {!! Form::close() !!}
                        <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    @stop

    @section('libs')
            <!-- jQuery 2.2.3 -->
    <script src="/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
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
    <script src="/js/fileinput.min.js"></script>
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

    <script>
        $("#input-image-1").fileinput({
            uploadUrl: "/article/uploads",
            allowedFileExtensions: ["jpg", "png", "gif"],
            maxImageWidth: 300,
            maxFileCount: 6,
            resizeImage: true
        }).on('filepreupload', function() {
            $('#kv-success-box').html('');
        }).on('fileuploaded', function(event, data) {
            $('#kv-success-box').append(data.response.link);
            $('#kv-success-modal').modal('show');
            $("#imagespic").val($("#imagespic").val()+data.response.link+',');
        });
    </script>
@stop

