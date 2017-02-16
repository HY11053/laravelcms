@extends('admin.layouts.admin_app')
@section('title')添加文档@stop
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
    {{Form::open(array('route' => 'article_create'))}}
    <div class="col-md-12">
        <!-- The time line -->
        <ul class="timeline">

            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                     {{date("M j, Y")}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->

            <li>
                <i class="fa fa-pencil-square bg-blue"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('H:i')}}</span>

                    <h3 class="timeline-header"><a href="#">文章基本信息|</a> 按需填写</h3>

                    <div class="timeline-body basic_info">
                        <div class="form-group col-md-12">
                            {{Form::label('title', '文章标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('title', '', array('class' => 'form-control','id'=>'title','placeholder'=>'文章标题'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-2 col-sm-3 col-xs-12 control-label">自定义文档属性</label>
                            <div class="checkbox" style="margin-top: 0px;">
                                <label>
                                    {{Form::checkbox('flags[]', 'h',false,array('class'=>'flat-red'))}} 头条
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'p',false,array('class'=>'flat-red'))}} 图片
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'c',false,array('class'=>'flat-red'))}} 推荐
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'f',false,array('class'=>'flat-red'))}} 幻灯
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 's',false,array('class'=>'flat-red'))}} 滚动
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'a',false,array('class'=>'flat-red'))}} 特荐
                                </label>
                            </div>

                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('shorttitle', '简略标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('shorttitle', '', array('class' => 'form-control','id'=>'shorttitle','placeholder'=>'短标题'))}}
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            {{Form::label('tags', 'tag标签', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('tags', '', array('class' => 'form-control','id'=>'tags','placeholder'=>'文档tag标签'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('keywords', '关键字', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('keywords', '', array('class' => 'form-control','id'=>'keywords','placeholder'=>'文档关键词'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('country', '经纬度', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('country', '', array('class' => 'form-control col-md-10','id'=>'country','placeholder'=>'填写地区名称即可'))}}
                            </div>
                        </div>

                        <div class="form-group col-md-12 ">
                            {{Form::label('iCheck', '文章状态', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="radio col-md-4 col-sm-9 col-xs-12">
                                {{Form::radio('iCheck', '1', true,array('class'=>'flat-red'))}} 已审核
                                {{Form::radio('iCheck', '0', false,array('class'=>'flat-red'))}}未审核
                            </div>

                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('datepicker', '预选发布时间', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="input-group date  col-md-4 col-sm-9 col-xs-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{Form::text('datepicker', '', array('class' => 'form-control pull-right','id'=>'datepicker','placeholder'=>'点击选择时间'))}}
                            </div>
                        </div>
                    </div>
                    <div class="timeline-footer">
                        <button class="btn btn-primary btn-xs">Read more</button>
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-photo bg-aqua"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('D M j')}}</span>
                    <h3 class="timeline-header no-border"><a href="#">缩略图处理</a> 图片上传</h3>
                    <div class="timeline-body">
                        {{Form::file('image',  array('class' => 'file col-md-10','id'=>'input-2','multiple data-show-upload'=>'false','data-show-caption'=>'true'))}}
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-user bg-yellow"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                    <h3 class="timeline-header"><a href="#">产品信息</a> 产品信息描述</h3>

                    <div class="timeline-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{Form::label('brandname', '品牌名称', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandname', '', array('class' => 'form-control col-md-10','id'=>'brandname','placeholder'=>'品牌名称'))}}
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                {{Form::label('brandtime', '成立时间', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandtime', '', array('class' => 'form-control col-md-10','id'=>'brandtime','placeholder'=>'1970-1-1'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandorigin', '品牌发源地', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandorigin', '', array('class' => 'form-control col-md-10','id'=>'brandorigin','placeholder'=>'品牌发源地'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandnum', '门店总数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandnum', '', array('class' => 'form-control col-md-10','id'=>'brandnum','placeholder'=>'门店总数'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandpay', '加盟费用', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandpay', '', array('class' => 'form-control col-md-10','id'=>'brandpay','placeholder'=>'加盟费用'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandarea', '加盟区域', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandarea', '', array('class' => 'form-control col-md-10','id'=>'brandarea','placeholder'=>'加盟区域'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandmap', '经营范围', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandmap', '', array('class' => 'form-control col-md-10','id'=>'brandmap','placeholder'=>'经营范围'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandperson', '加盟人群', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandmap', '', array('class' => 'form-control col-md-10','id'=>'brandmap','placeholder'=>'加盟人群'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandattch', '加盟意向人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandattch', '', array('class' => 'form-control col-md-10','id'=>'brandattch','placeholder'=>'加盟意向人数'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandapply', '申请加盟人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandapply', '', array('class' => 'form-control col-md-10','id'=>'brandapply','placeholder'=>'申请加盟人数'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandchat', '加盟意向人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandchat', '', array('class' => 'form-control col-md-10','id'=>'brandchat','placeholder'=>'加盟意向人数'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandgroup', '公司名称', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandgroup', '', array('class' => 'form-control col-md-10','id'=>'brandgroup','placeholder'=>'公司名称'))}}
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                {{Form::label('brandaddr', '公司地址', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandaddr', '', array('class' => 'form-control col-md-10','id'=>'brandaddr','placeholder'=>'公司地址'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandduty', '是否区域授权', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandduty', '', array('class' => 'form-control col-md-10','id'=>'brandduty','placeholder'=>'是否区域授权'))}}
                                    {{Form::hidden('mid', '0', array('class' => 'form-control col-md-10','id'=>'mid'))}}
                                </div>
                            </div>
                        </div>
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
                   {{date("M j, Y")}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-camera bg-purple"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('j, n,y')}}</span>

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
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-file-text bg-maroon"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

                    <h3 class="timeline-header"><a href="#">文档处理</a>文章内容编辑</h3>

                    <div class="timeline-body">
                        @include('admin.layouts.summernote')
                        <div style="display: none"><textarea  name="textareacontent" id="lawsContent"></textarea></div>
                    </div>
                    <div class="timeline-footer">
                        <button type="submit"  class="btn btn-md bg-maroon">提交文档</button>
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
    {!! Form::close() !!}
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

