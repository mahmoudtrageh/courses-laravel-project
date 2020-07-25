<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [

        'name_ar',
        'name_en',
    ];

    public function admins()
    {
        return $this->belongsToMany(Role::class, 'admin_role', 'role_id', 'admin_id');
    }
}
