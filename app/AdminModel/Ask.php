<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    //
    protected $fillable=['title','user_id','body','ip'];
}
