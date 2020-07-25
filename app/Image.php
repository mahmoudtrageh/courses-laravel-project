<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [

        'home_img',
        'fixed_img',
        'courses_img',
        'course_img',
        'about_img',
        'logo',
                'news_img',
    ];
}
