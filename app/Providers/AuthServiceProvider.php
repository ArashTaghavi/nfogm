<?php

namespace App\Providers;

use App\Models\Permission;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerPolicies();
        if (Schema::hasTable('permissions')) {
            $permissions = Permission::all();
            if (!empty($permissions)) {
                foreach ($permissions as $permission) {
                    Gate::define($permission->name, function ($user, $includes = []) use ($permission) {
                        /** @var $user User */
                        if (empty($includes)) {
                            return $user->hasRole($permission->roles);
                        } else {
                            return $user->hasPermission($permission, $includes);
                        }
                    });
                }
            }
        }

        //
    }
}
