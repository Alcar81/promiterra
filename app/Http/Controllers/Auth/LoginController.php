<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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

    protected function redirectTo()
    {
        if (Auth::user()->roles->pluck('name')->contains('admin')) {
            return '/admin/users';
        } elseif (Auth::user()->roles->pluck('name')->contains('master')) {
            return '/profile/master';
        } elseif (Auth::user()->roles->pluck('name')->contains('editor')) {
            return '/profile/user';

        } elseif (Auth::user()->roles->pluck('name')->contains('superuser')) {
            return '/profile/superuser';
        } elseif (Auth::user()->roles->pluck('name')->contains('user')) {
            return '/profile/user';
        } else {
            return 'home';
        }
    }


}
