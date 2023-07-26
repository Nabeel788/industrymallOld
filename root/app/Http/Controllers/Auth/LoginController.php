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
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated($request, $user){
        if(($user->role) =='Admin' && ($user->status) == 0){
            return redirect('/home');
        }else
        if(($user->role) =='Vendor' && ($user->status) == 1){
            $this->logout();
            return redirect()->back()->with('failure_message','Your Account is suspended, please contact Admin.');
        }else
        if(($user->role) =='Customer'){
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
