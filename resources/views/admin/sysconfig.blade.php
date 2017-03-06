@extends('admin.layouts.admin_app')
@section('title')
    网站文档列表
    @stop
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
    <!-- Theme style -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/AdminLTE/dist/css/skins/overwrite.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>.red{color: red;}</style>
    @stop
    @section('content')
        <div class="right_col" role="main">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h4>站点信息配置 <small>配置信息通过config('参数')在全局调用</small></h4>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" onsubmit="return false;" data-parsley-validate class="form-horizontal form-label-left">
                                    {!! csrf_field() !!}

                                    <div class="form-group col-md-12">
                                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="tel">网站名称 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <input type="text" id="host_url" name="host_url" required="required" value="" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email" class="control-label col-md-2 col-sm-3 col-xs-12">站点根网址</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" id="keyword" type="text" value="" name="search_keyword">
                                        </div>
                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">首页网址</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" type="text" id="lianxi" value="" name="lianxi">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">主页链接名</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value=""   name="remark">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">附件上传路径</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value=""   name="remark">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">备案信息</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value=""   name="remark">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">站点关键词</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value=""   name="remark">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">版权信息</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-2 col-sm-3 col-xs-12">站点描述</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-2">

                                            <button type="submit" name="submit"  id="tj_btn" class=" col-md-12 btn btn-primary submbtn">提交</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
