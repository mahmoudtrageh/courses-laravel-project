<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [

        'name_ar',      
        'name_en', 
        'title_en',
        'title_ar',
    ];
}
