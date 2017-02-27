<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Archive extends Model
{
    protected $fillable=[
        'title','shorttitle','tags','keywords','country','ismake','published_at','mid','litpic','typeid','channelid','click','weight','description','write','dutyadmin','flags'
    ];
    protected $dates = ['published_at'];

    public function getPublishedAtAttribute($date)
    {

        if (Carbon::now() > Carbon::parse($date)->addDays(10)){
           return date('Y-m-d',strtotime($date));
        }

        return Carbon::parse($date)->diffForHumans();
    }

    public function setPublishedAtAttribute($date)
    {
        if(!empty($date) && strpos($date, '/') !== false)
        {
            $newdate=explode('/',$date);
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$newdate[2].'-'.$newdate[0].'-'.$newdate[1]);
        }else{
            //dd($date);
            $this->attributes['published_at'] =$date?Carbon::createFromFormat('Y-m-d',date('Y-m-d',strtotime($date))) : Carbon::now();
        }
    }
}