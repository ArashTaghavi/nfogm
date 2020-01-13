<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\RoleUser;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsInstituteExpert
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $role_user = RoleUser::all();
        $condition = false;
        foreach ($role_user as $role) {
            if ($role->role_id === Role::INSTITUTE_EXPERT && Auth::id() === $role->user_id) {
                $condition = true;
                break;
            }
        }
        if (!$condition) {
            abort(401, 'دسترسی به این صفحه مجاز نمی باشد.');
        }
        return $next($request);
    }
}
