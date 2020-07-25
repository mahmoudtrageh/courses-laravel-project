<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RegisterCourse extends Authenticatable
{

    use Notifiable;

    protected $fillable = [

        'name',
        'email',
        'mobile',
        'occupation',
        'apply',
        'apply_n',
        'address',
        'course_id',
    ];

    public $table = "register_courses";

    public function channels()
    {
        return $this->belongsToMany(Channel::class, 'course_channels', 'course_id', 'channel_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'register_courses', 'id');
    }


}
