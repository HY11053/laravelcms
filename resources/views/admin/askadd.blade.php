@extends('admin.layouts.admin_app')
@section('title')添加问答@stop
@section('head')
    <link href="/AdminLTE/plugins/iCheck/all.css" rel="stylesheet">
@stop
@section('content')
    <!-- row -->
    <div class="row">
        {{Form::open(array('route' => 'ask_create','files' => true,))}}
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

                        <h3 class="timeline-header"><a href="#">问答基本信息|</a> 按需填写</h3>

                        <div class="timeline-body basic_info">
                            <div class="form-group col-md-12">
                                {{Form::label('title', '问答标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('title', null, array('class' => 'form-control','id'=>'title','placeholder'=>'问答标题'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('tags', '问答标签', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('tags', null, array('class' => 'form-control','id'=>'title','placeholder'=>'问答标签'))}}
                                </div>
                            </div>


                        </div>
                        <div class="timeline-footer">
                            <div class="col-sm-12 basic_info">
                                {{Form::radio('is_hidden', '1', true,array('class'=>"flat-red"))}} 已审核
                                {{Form::radio('is_hidden', '0',false,array('class'=>"flat-red"))}} 未审核
                            </div>
                            <button class="btn btn-primary btn-xs">Read more</button>
                        </div>
                    </div>
                </li>

                <li>
                    <i class="fa fa-file-text bg-maroon"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

                        <h3 class="timeline-header"><a href="#">问答描述</a>问答内容编辑</h3>

                        <div class="timeline-body">
                            @include('vendor.ueditor.assets')
                                    <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var ue = UE.getEditor('container',{
                                    toolbars: [
                                        [
                                            'anchor', //锚点
                                            'undo', //撤销
                                            'redo', //重做
                                            'bold', //加粗
                                            'indent', //首行缩进
                                            'snapscreen', //截图
                                            'italic', //斜体
                                            'underline', //下划线
                                            'strikethrough', //删除线
                                            'subscript', //下标
                                            'fontborder', //字符边框
                                            'superscript', //上标
                                            'formatmatch', //格式刷
                                            'source', //源代码
                                            'blockquote', //引用
                                            'pasteplain', //纯文本粘贴模式
                                            'selectall', //全选
                                            'print', //打印
                                            'preview', //预览
                                            'horizontal', //分隔线
                                            'removeformat', //清除格式
                                            'time', //时间
                                            'date', //日期
                                            'unlink', //取消链接
                                            'insertrow', //前插入行
                                            'insertcol', //前插入列
                                            'mergeright', //右合并单元格
                                            'mergedown', //下合并单元格
                                            'deleterow', //删除行
                                            'deletecol', //删除列
                                            'splittorows', //拆分成行
                                            'splittocols', //拆分成列
                                            'splittocells', //完全拆分单元格
                                            'deletecaption', //删除表格标题
                                            'inserttitle', //插入标题
                                            'mergecells', //合并多个单元格
                                            'deletetable', //删除表格
                                            'cleardoc', //清空文档
                                            'insertparagraphbeforetable', //"表格前插入行"
                                            'insertcode', //代码语言
                                            'fontfamily', //字体
                                            'fontsize', //字号
                                            'paragraph', //段落格式
                                            'simpleupload', //单图上传
                                            'insertimage', //多图上传
                                            'edittable', //表格属性
                                            'edittd', //单元格属性
                                            'link', //超链接
                                            'emotion', //表情
                                            'spechars', //特殊字符
                                            'searchreplace', //查询替换
                                            'map', //Baidu地图
                                            'gmap', //Google地图
                                            'insertvideo', //视频
                                            'help', //帮助
                                            'justifyleft', //居左对齐
                                            'justifyright', //居右对齐
                                            'justifycenter', //居中对齐
                                            'justifyjustify', //两端对齐
                                            'forecolor', //字体颜色
                                            'backcolor', //背景色
                                            'insertorderedlist', //有序列表
                                            'insertunorderedlist', //无序列表
                                            'fullscreen', //全屏
                                            'directionalityltr', //从左向右输入
                                            'directionalityrtl', //从右向左输入
                                            'rowspacingtop', //段前距
                                            'rowspacingbottom', //段后距
                                            'pagebreak', //分页
                                            'insertframe', //插入Iframe
                                            'imagenone', //默认
                                            'imageleft', //左浮动
                                            'imageright', //右浮动
                                            'attachment', //附件
                                            'imagecenter', //居中
                                            'wordimage', //图片转存
                                            'lineheight', //行间距
                                            'edittip ', //编辑提示
                                            'customstyle', //自定义标题
                                            'autotypeset', //自动排版
                                            'webapp', //百度应用
                                            'touppercase', //字母大写
                                            'tolowercase', //字母小写
                                            'background', //背景
                                            'template', //模板
                                            'scrawl', //涂鸦
                                            'music', //音乐
                                            'inserttable', //插入表格
                                            'drafts', // 从草稿箱加载
                                            'charts', // 图表
                                        ]
                                    ],
                                    elementPathEnabled: false,
                                    enableContextMenu: false,
                                    autoClearEmptyNode:true,
                                    wordCount:false,
                                    imagePopup:false,
                                    autotypeset:{ indent: true,imageBlockLine: 'center' }
                                });
                                ue.ready(function() {
                                    ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                });
                            </script>

                            <!-- 编辑器容器 -->
                            <script id="container" name="body" type="text/plain"></script>
                        </div>
                        <div class="timeline-footer">
                            <button type="submit"  class="btn btn-md bg-maroon">提交问答</button>
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
    @if(count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
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
    <script src="/AdminLTE/plugins/iCheck/icheck.min.js"></script>
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

@stop

