<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstSlider extends Model
{
    protected $fillable = [

        'title',
        'icon_link',
        'title_ar',
    ];

    public $table = "first_sliders";
}
