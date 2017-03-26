<div class="comments-container">
    <div class="comments-box">
        <div class="pull-left">
            <img class="avatar-32 " src="/reception/images/user-128.png" alt=""/>
        </div>
        <div class="comments-box-content">
            <form action="/comments" method="post">
                {{ csrf_field() }}
                <div class="form-group mb0">
                    <textarea name="comment" rows="3" class="form-control"  placeholder="文明社会，理性评论"></textarea>
                    <div class="mt15 text-right">
                        <input type="hidden" name="aid" value="{{$thisarticleinfos->id}}">
                        <button class=" btn btn-primary" type="submit">发布评论</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="comments-list"></div>
    <div class="comments-loading hide">载入中...</div>
    <div class="comments-more hide"><a href="javascript:;">显示更多评论</a></div>
</div>