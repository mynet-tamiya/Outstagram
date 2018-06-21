<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        echo "test";
        $this->middleware('guest')->except('logout');
//        exit("construct()");
    }

    public function username()
    {
        echo "username()";
        return 'email';
    }

    //
    public function login()
    {
        echo "login()";
        return view('login');
    }

//    public function show()
//    {
//        exit("show()");
//        return view('post');
//    }
}
