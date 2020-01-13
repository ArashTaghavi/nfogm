<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const INSTITUTE_EXPERT = 3;

    protected $fillable = ['title'];

    public function users()
    {
        return $this->belongsToMany(User::class)->using(RoleUser::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->using(PermissionRole::class);
    }
}
