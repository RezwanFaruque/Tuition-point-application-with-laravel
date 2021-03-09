<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TutorInfo;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Model\ActiveTution;
use App\Model\AppliedTutorForTution;
use Illuminate\Support\Facades\Auth;

class TutorHomeController extends Controller
{

    /**
     * Show the TutorProfile dashboard.
     */

    public function index()
    {
        // dd(1);

        $users = User::where('id', Auth::user()->id)->with('tutorinfo')->get();

        // dd($users);
        return view('tutorprofilehome', compact('users'));
    }

    /**
     * Edit for single tutor.
     */
    public function editProfile($id)
    {

        $getuser = User::where('id', Auth::user()->id)->with('tutorinfo')->first();


        return view('tutor.editprofile', compact('getuser'));
    }



    // tutor about us page
    public function aboutUs()
    {
        return view('aboutus');
    }

    // tutor faq page

    public function faq()
    {
        return view('faq');
    }


    // active tutions page for tutor
    public function activeTutions()
    {
        $available_tutions = ActiveTution::all();

        return view('tutor.activetutions',compact('available_tutions'));
    }


    // single tutor view
    public function singleTutionView($id)
    {
        $tution = ActiveTution::find($id);
        if ($tution) {

            return response()->json($tution);
        }
    }

    // apply for single active tution
    public function applyForActiveTution(Request $request){

        // dd($request->all());

        $appliedtutor = new AppliedTutorForTution();
        $tutor = TutorInfo::where('user_id',$request->user_id)->first();

        $appliedtutor->name = $tutor->name;
        $appliedtutor->active_tution_post_id = $request->tution_post_id;
        $appliedtutor->university = $tutor->university_or_collage;
        $appliedtutor->phone_number = $tutor->mobile_number;
        $appliedtutor->area = $tutor->area;
        $appliedtutor->tutor_id = $tutor->user_id;

        $appliedtutor->save();



        if($appliedtutor->save()){

           $data = [
               "status" => 'Success',
               "message" => 'You applied for this tution wait untill our team contact with you'
           ];
           
           return response()->json($data);
           
            
            
        }



    }
}
