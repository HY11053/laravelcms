<div class="comments-container">
    <div class="comments-box">
        <div class="pull-left">
            <img class="avatar-32 " src="/reception/images/user-128.png" alt=""/>
        </div>
        <div class="comments-box-content">
            <form action="/comments" method="post">
                {{ csrf_field() }}
                <div class="form-group mb0">
                    <textarea name="content" rows="3" class="form-control"  placeholder="文明社会，理性评论"></textarea>
                    <div class="mt15 text-right">
                        <input type="hidden" name="archive_id" value="{{$thisarticleinfos->id}}">
                        <button class=" btn btn-primary" type="submit">发布评论</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@if(count($comments)>0)
<div class="xg_news">
    <div class="title"><strong>内容评论</strong></div>
    <div class="xw">
        <ul class="clearfix">
            @foreach($comments as $comment)
                <div class="comment " id="reply-{{$comment->id}}">
                    <a class="avatar avatar-large">
                        <img class="b-lazy b-loaded" src="/AdminLTE/dist/img/avatar2.png">
                    </a>
                    <div class="content">
                        <a class="author" href="/user/openwrtmail">{{$comment->user->name}}
                        </a>
                        <div class="metadata">
                            <span class="date">{{$comment->updated_at}}</span>
                        </div>
                        <div class="text Post-body">
                            <p>{{$comment->content}}</p>
                        </div>
                        <div class="actions">
                            <a class="reply" data-parent_id="{{$comment->id}}" data-conversation-id="32" data-username="{{$comment->user->name}}" data-userid="{{$comment->user->id}}" data-comment-type="article" data-url="/commentreversion/{{$comment->archive->id}}">回复</a>
                            <a class="save">分享</a>
                        </div>
                        <div class="reply-form-container"></div>
                    </div>
                </div>
                @foreach($comment->reversion as $reversion)
                    <div class="comments" style="margin-top:-2.5em;">
                        <div class="comment ">
                            <a class="avatar">  <img src="/AdminLTE/dist/img/avatar3.png"></a>
                            <div class="content">
                                <a class="author">liang569874</a>
                                <div class="metadata">
                                    <span class="date">{{$reversion->updated_at}}</span> </div>
                                <div class="text Post-body" id="Comment__Post_content">
                                    <p>{{$reversion->content}}</p>
                                </div>
                                <div class="actions">
                                    <a class="reply" data-parent_id="{{$comment->id}}" data-conversation-id="89" data-username="JellyBool" data-userid="7" data-comment-type="lesson" data-url="/commentreversion/{{$comment->archive->id}}"> 回复</a> <a class="hide">隐藏</a> <a class="save">分享</a>
                            </div>
                            <div class="reply-form-container">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endforeach
        </ul>
    </div>
</div>
    @endif