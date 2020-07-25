<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [

        'c_name',
        'course_img',
        'start',
        'end',
        'value',
        'registers_n',
        'detail',
        'advantage',
        'course_category',
        'cname_ar',
        'insname_ar',
        'detail_ar',
        'advantage_ar',
        'category_ar',
        'map_link',
        'venue',

    ];

    public function registers()
    {
        return $this->hasMany(RegisterCourse::class, 'course_id');
    }

  public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'courses_ins', 'course_id', 'ins_id');
    }

}

