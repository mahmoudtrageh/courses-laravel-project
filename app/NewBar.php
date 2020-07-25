<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewBar extends Model
{
    protected $fillable = [

        'new',
        'new_ar',
    ];

    public $table = "new_bars";

}
