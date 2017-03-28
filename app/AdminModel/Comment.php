<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['content','archive_id','ip','user_id','is_hidden'];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function archive()
    {
        return $this->belongsTo('App\AdminModel\Archive','archive_id');
    }
    protected function reversion()
    {
        return $this->hasMany('App\AdminModel\CommentReversion','comment_id');
    }

}
