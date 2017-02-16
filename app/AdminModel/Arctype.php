<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Arctype extends Model
{
    //
    protected $fillable = [
        'reid',
        'topid',
        'sortrank',
        'typename',
        'typedir',
        'title',
        'description',
        'keywords',
        'isextend',
        'is_write',
        'litpic',
        'contents',
        'dirposition',
    ];
    public function setFillable($fillable)
    {
        $this->fillable = $fillable;
    }
}
