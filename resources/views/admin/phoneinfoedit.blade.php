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
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')


            {!! Form::model($thisPhoneInfo,array('action' =>array('Admin\PhoneManageController@PhoneManageEdit', $thisPhoneInfo->id),'method' => 'put')) !!}
            <div class="form-group has-feedback">
                {{Form::text('name', null,array('class'=>'form-control','id'=>'name','disabled'=>'disabled','placeholder'=>'用户名'))}}
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('phoneno', null,array('class'=>'form-control','id'=>'phoneno','disabled'=>'disabled','placeholder'=>'电话号码'))}}
                <span class="glyphicon glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('gender', null,array('class'=>'form-control','id'=>'gender','disabled'=>'disabled','placeholder'=>'性别'))}}
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('address', null,array('class'=>'form-control','id'=>'address','disabled'=>'disabled','placeholder'=>'地址'))}}
                <span class="glyphicon glyphicon glyphicon-globe form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::textarea('note', null,array('class'=>'form-control','id'=>'note','disabled'=>'disabled','placeholder'=>'备注'))}}
                <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">提交</button>
                </div>
                <!-- /.col -->
            </div>
            {!! Form::close() !!}
            @if(count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

    <!-- /.register-box -->
    <!-- /.row -->
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


