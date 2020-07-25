<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [

        'paragraph1',
        'paragraph2',
        'paragraph1_ar',
        'paragraph2_ar',
    ];

    public $table = "newsletters";
}
