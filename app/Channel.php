<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [

        'name_ar',
        'name_en',
    ];

    public function courses()
    {
        return $this->belongsToMany(Channel::class, 'course_channels', 'channel_id', 'course_id');
    }
}
