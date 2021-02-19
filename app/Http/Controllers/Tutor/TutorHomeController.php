<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TutorInfo;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class TutorHomeController extends Controller
{

     /**
     * Show the TutorProfile dashboard.
     */

    public function index()
    {

        $users = User::where('id',Auth::user()->id)->with('tutorinfo')->get();
        
        // dd($users);
        return view('tutorprofilehome',compact('users'));
    }

     /**
     * Edit for single tutor.
     */
    public function editProfile($id){
        
        $getuser = User::where('id',Auth::user()->id)->with('tutorinfo')->first();
        
        
        return view('tutor.editprofile',compact('getuser'));
    }

}
