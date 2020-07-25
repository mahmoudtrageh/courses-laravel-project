<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    protected $fillable = [

        'title1',
        'title2',
        'title3',
        'detail1',
        'detail2',
        'detail3',
        'title1_ar',
        'title2_ar',
        'title3_ar',
        'detail1_ar',
        'detail2_ar',
        'detail3_ar',
    ];

    public $table = "home_about";
}
