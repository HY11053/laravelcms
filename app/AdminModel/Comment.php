<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['comment','aid','ip','uid'];
}
