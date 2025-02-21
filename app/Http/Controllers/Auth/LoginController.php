<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


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
    protected function authenticated()
   {
       if(auth()->user()->role_as == 'admin') //1 = Admin Login
       {
           return redirect('dashboard')->with('status','Welcome to your dashboard');
       }
       elseif(auth()->user()->role_as == '0') // Normal or Default User Login
       {
           return redirect('/')->with('status','Logged in successfully');
       }
   }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
