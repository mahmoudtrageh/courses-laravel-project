<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecondSlider extends Model
{
    protected $fillable = [

        'main_name',
        'second_name',
        'slider_img',
        'mainname_ar',
        'secondname_ar',
    ];

    public $table = "second_sliders";
}
