@extends('mobile.mobile')
@section('main_content')
    <!--内容开始-->
    <div class="list_middle">
        <div class="text_centre">
            <ul>
                @foreach($pagelists as $pagelist)
                <li>
                    <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">
                        <div class="img_show"><img src="{{$pagelist->litpic}}" class="img_list"></div>
                        <div class="cont">
                            <p class="tit_1">{{$pagelist->title}}</p>
                            <p class="info">{{$pagelist->description}}</p>
                        </div>
                    </a>
                </li>
               @endforeach
            </ul>
        </div>
        <!--分页开始-->
        {{$pagelists->links()}}
        <!--分页开始-->

    </div>
    <!--内容结束-->
@stop

