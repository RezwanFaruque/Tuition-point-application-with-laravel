<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt(array('email' => $request->email, 'password' => $request->password))){
            
            if(Auth::user()->is_admin == '1'){
                
                return redirect()->route('admin.home');

            }elseif(Auth::user()->is_tutor == '1'){
                return redirect()->route('tutor.home');

            }elseif(Auth::user()->is_gurdian == '1'){
                return redirect()->route('gurdian.home');
            }else{
                // return redirect()->route('home');
            }

        }else{
            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
        }
    }
}
