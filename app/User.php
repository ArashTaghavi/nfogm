<?php

namespace App;

use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const SUPER_ADMIN = 1;
    const ADMIN = 2;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class)->using(RoleUser::class);
    }
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        if (is_array($role)) {
            return $this->roles->contains(function ($value, $key) use ($role) {
                foreach ($role as $roleName) {
                    if (is_string($roleName)) {
                        if ($roleName == $value->name) {
                            return true;
                        }
                    }
                    if ($roleName instanceof Role) {
                        if ($roleName->name == $value->name) {
                            return true;
                        }
                    }
                }
                return false;
            });
        }

        return $role->intersect($this->roles)->count();
    }

}
