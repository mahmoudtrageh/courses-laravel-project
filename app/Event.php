<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [

        'date',
        'title',
        'detail',
        'author',
        'title_ar',
        'author_ar',
        'detail_ar',
        'img',
    ];
}
