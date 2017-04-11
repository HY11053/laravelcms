<li>
    <i class="fa fa-file-text bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">品牌介绍</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('ppjstitle', '品牌介绍标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('ppjstitle', null, array('class' => 'form-control col-md-10','id'=>'ppjstitle','placeholder'=>'品牌介绍标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <div class="summernote" id="summernote1">
                                    @if(isset($articleinfos->body))
                                        {!! $articleinfos->body !!}
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none">{{Form::textarea('body', null,array('id'=>'summernote1contcontents'))}} </div>
    </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">加盟详情</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('jmxqtitle', '加盟详情标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('jmxqtitle', null, array('class' => 'form-control col-md-10','id'=>'jmxqtitle','placeholder'=>'加盟详情标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <div class="summernote" id="summernote2">
                                    @if(isset($articleinfos->jmxq_content))
                                        {!! $articleinfos->jmxq_content !!}
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none">{{Form::textarea('jmxq_content', null,array('id'=>'summernote2contcontents'))}}</div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">加盟优势</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('jmystitle', '加盟优势标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('jmystitle', null, array('class' => 'form-control col-md-10','id'=>'jmystitle','placeholder'=>'品牌介绍标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <div class="summernote" id="summernote3">
                                    @if(isset($articleinfos->jmys_content))
                                        {!! $articleinfos->jmys_content !!}
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none">{{Form::textarea('jmys_content', null,array('id'=>'summernote3contcontents'))}}</div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">加盟流程</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('jmlctitle', '加盟流程标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('jmlctitle', null, array('class' => 'form-control col-md-10','id'=>'jmlctitle','placeholder'=>'加盟流程标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <div class="summernote" id="summernote4">
                                    @if(isset($articleinfos->jmlc_content))
                                        {!! $articleinfos->jmlc_content !!}
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none">{{Form::textarea('jmlc_content', null,array('id'=>'summernote4contcontents'))}}</div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">加盟政策</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('jmzctitle', '加盟政策标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('jmzctitle', null, array('class' => 'form-control col-md-10','id'=>'jmzctitle','placeholder'=>'加盟政策标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <div class="summernote" id="summernote5">
                                    @if(isset($articleinfos->jmzc_content))
                                        {!! $articleinfos->jmzc_content !!}
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none">{{Form::textarea('jmzc_content', null,array('id'=>'summernote5contcontents'))}}</div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">加盟问答</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('jmasktitle', '加盟问答标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('jmasktitle', null, array('class' => 'form-control col-md-10','id'=>'jmasktitle','placeholder'=>'加盟问答标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <div class="summernote" id="summernote6">
                                    @if(isset($articleinfos->jmask_content))
                                        {!! $articleinfos->jmask_content !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none">{{Form::textarea('jmask_content', null,array('id'=>'summernote6contcontents'))}}</div>
        </div>
        <div class="timeline-footer">
            <button type="submit"  class="btn btn-md bg-maroon">提交文档</button>
        </div>
    </div>
</li>