<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    public function showLoginForm()
    {
        return view('auth.login');
    }
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo='/admin/dashboard' ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function authenticated()
    {
        if(Auth::user()->type == '1') //1 = Admin Login
        {
            return redirect('admin/dashboard')->with('status','login');
        }
        elseif(Auth::user()->type == '0') // Normal or Default User Login
        {
            return redirect('/home')->with('status','you are user Login');

        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}