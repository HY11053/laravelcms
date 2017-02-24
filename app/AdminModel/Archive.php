<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable=[
        'title','shorttitle','tags','keywords','country','ismake','aftertime','mid','litpic','typeid','channelid','click','weight','description','write','dutyadmin','flags'
    ];
}
