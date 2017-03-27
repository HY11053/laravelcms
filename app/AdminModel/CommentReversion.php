<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class CommentReversion extends Model
{
    protected $fillable=['content','comment_id','archive_id','user_id','good_post','is_hidden','ip'];
    public function comments()
    {
        return $this->belongsTo('App\AdminModel\Archive','comment_id');
    }

}
