<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function validateLogin(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
        $validator->after(function ($validator) use ($request) {
            $user = User::where('email', $request->get($this->username()))->first();
            if (!empty($user)) {
                $passwordValidation = \Hash::check($request->get('password'), $user->password);
                if (!$passwordValidation) {
                    $validator->errors()->add($this->username(), __('auth.failed'));
                }
                if ($user->is_blocked) {
                    $validator->errors()->add($this->username(), __('auth.blocked'));
                }

            }
        });
        $validator->validate();
    }

    public function authenticated(Request $request, $user)
    {
        $roles = RoleUser::all();

        foreach ($roles as $role) {
            switch ($role->role_id) {
                case Role::INSTITUTE_EXPERT:
                    return redirect('/institute-expert');
                case Role::ADMIN:
                    return redirect('/admin');
            }
        }
    }
}
