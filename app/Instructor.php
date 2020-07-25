<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [

        'name_ar',
        'name_en',
                'ins_img',
    ];

    public function courses()
    {
        return $this->belongsToMany(Instructor::class, 'courses_ins', 'ins_id', 'course_id');
    }
}
