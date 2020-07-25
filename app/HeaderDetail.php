<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderDetail extends Model
{
    protected $fillable = [

        'title1',
        'title2',
        'phone',
        'mobile',
        'email',
        'duration',
        'title1_ar',
        'title2_ar',
    ];

    public $table = "header_details";
}
