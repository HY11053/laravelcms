<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Archive extends Model
{
    protected $fillable=[
        'title','shorttitle','tags','keywords','country','ismake','aftertime','mid','litpic','typeid','channelid','click','weight','description','write','dutyadmin','flags'
    ];

    public function getCreatedAtAttribute($date)
    {
        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date);
        }

        return Carbon::parse($date)->diffForHumans();
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
}
