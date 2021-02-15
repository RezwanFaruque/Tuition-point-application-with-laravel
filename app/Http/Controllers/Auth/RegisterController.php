<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Model\TutorInfo;
use App\Model\GurdianInfo;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        
        

        $request->validate([
            'user_role' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required',
            'profile_image' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',

        ]);

        ;
        $user = new User();

        $user->name = $request->name;
        $user->phone_number = $request->phone_number;

        if($request->hasFile('profile_image')){
            $file = $request->file('profile_image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $path = public_path('assets/vendor/images/registerpage');
            $file->move($path, $filename);
            $user->profile_image = 'assets/vendor/images/registerpage/'.$filename;
        }
        if($request->user_role == 'tutor'){
            $user->is_tutor = '1';
        }
        if($request->user_role == 'gurdian'){
            $user->is_gurdian = '1';
        }
        $user->gender = $request->gender;
        $user->email = $request->email;

        // making password with hash
        $password = Hash::make($request->password);
        $confirm_password = Hash::make($request->confirm_password);
        
        $user->password = $password;
        // $user->confirm_password = $confirm_password;

        $user->save();

        // dd($user->name);
        if($user->save()){
            $tutorinfo = new TutorInfo();
            $gurdianinfo = new GurdianInfo();

            // tutor info
            $tutorinfo->name = $user->name;
            $tutorinfo->gender = $user->gender;
            $tutorinfo->mobile_number = $user->phone_number;

            // gurdian info
            $gurdianinfo->name = $user->name;
            $gurdianinfo->gender = $user->gender;
            $gurdianinfo->phone_number = $user->phone_number;
            $gurdianinfo->email = $user->email;

            // save tutor info
            $tutorinfo->save();

            // save gurdian info
            $gurdianinfo->save();

            if($tutorinfo->save() && $gurdianinfo->save()){
                return redirect()->route('login');
            }
        }

       
    }
}
