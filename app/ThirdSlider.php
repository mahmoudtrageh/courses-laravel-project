<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThirdSlider extends Model
{
    protected $fillable = [

        'main_name',
        'second_name',
        'mainname_ar',
        'secondname_ar',
        'slider_img',
    ];

    public $table = "third_sliders";
}
