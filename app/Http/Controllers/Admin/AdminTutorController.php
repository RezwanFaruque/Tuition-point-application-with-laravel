<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TutorInfo;


class AdminTutorController extends Controller
{

    // Fetch all tutors with all information;
    public function fetchAllTutors(){

        // fetch all tutors
        $tutors = TutorInfo::all();
        // dd($tutors);
        return view('admin.tutors',compact('tutors'));


    }


    // Fetch single tutor api;
    public function fetchSingleTutor($id){

        $singtutor = TutorInfo::find($id);
        if($singtutor){

            return response()->json($singtutor);
        }
    }
}
