<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TutorInfo;
use App\Model\GurdianInfo;
use App\Model\ActiveTution;



class AdminHomeController extends Controller
{

    

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // all tutors
        $alltutors = TutorInfo::all()->count();
        
        // all gurdian
        $allgurdians = GurdianInfo::all()->count();

        // all active tutions
        $activetutions = ActiveTution::all()->count();


        return view('admin.adminhome',compact('alltutors','allgurdians','activetutions'));
    }
    
}
