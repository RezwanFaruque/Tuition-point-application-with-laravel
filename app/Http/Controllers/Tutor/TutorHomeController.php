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

        $tutorinfo = TutorInfo::where('user_id',$id)->first();

        

        // calculating the profile complete progress;

        $prgress = 0;

        if($tutorinfo->name && $tutorinfo->university_or_collage && $tutorinfo->area && $tutorinfo->subject != ''){
            $prgress = $prgress+12;
        }
        if($tutorinfo->medium != ''){
            $prgress = $prgress+4;
        }
        if($tutorinfo->medium != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->days_per_week != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->mobile_number != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->gender != ''){
            $prgress = $prgress+4;
        }
        if($tutorinfo->h_school_name != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->h_school_section != ''){
            $prgress = $prgress+4;
        }if($tutorinfo->h_school_result != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->collage_name != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->collage_result != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->university_name != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->university_passing_year != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->experience_subjects != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->experience_years != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->prefered_subject != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->prefered_medium != ''){
            $prgress = $prgress+4;
        }
        if($tutorinfo->prefared_area != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->salar_range_from != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->salary_range_to != ''){
            $prgress = $prgress+4;
        }

        if($tutorinfo->district_name != ''){
            $prgress = $prgress+4;
        }


        if($prgress == '92'){
            $prgress = 100;
        }else{
            $prgress = $prgress;
        }


        return view('tutor.editprofile', compact('getuser','prgress'));
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

        // dd($request->tution_post_id);

        $request->validate([
            
            'user_id'  => 'unique:applied_tutor_for_tutions,tutor_id,NULL,id,active_tution_post_id,'.$request->tution_post_id,
            
        ]);

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
               "status" => 'success',
               "message" => 'You applied for this tution wait untill our team contact with you'
           ];
           
           return response()->json($data);
           
            
            
        }else{
            $data = [
                "status" => 'error',
                "message" => 'You Already Applied For This Tution'
            ];
            
            return response()->json($data);
        }



    }


    // update personal profile
    public function updateProfile(Request $request){
        

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);


        $user = User::find($request->profile_id);
        if($user && $user->is_tutor == '1'){
            $tutoruser = TutorInfo::where('user_id',$request->profile_id)->first();

            $user->name = $request->name;
            $user->profile_image = $request->profile_image;
            $user->phone_number = $request->phone_number;
            $user->gender = $request->gender;
            $user->email = $request->email;
            $user->profile_image = $request->profile_image;

            $tutoruser->parents_phone_number = $request->parents_phone_number;
            $tutoruser->university_or_collage = $request->university_name;
            $tutoruser->area = $request->area;
            $tutoruser->subject = $request->subject;
            $tutoruser->district_name = $request->district_name;
            $tutoruser->medium = $request->medium;
            $tutoruser->h_school_name = $request->h_school_name;
            $tutoruser->h_school_section = $request->h_school_section;
            $tutoruser->h_school_result = $request->h_school_result;
            $tutoruser->collage_name = $request->collage_name;
            $tutoruser->collage_section = $request->collage_section;
            $tutoruser->collage_result = $request->collage_result;
            $tutoruser->university_name = $request->university_name;
            $tutoruser->subject = $request->subject;
            $tutoruser->university_result = $request->university_result;
            $tutoruser->university_passing_year = $request->university_passing_year;
            $tutoruser->prefered_class = $request->prefered_class;
            $tutoruser->prefered_subject = $request->prefered_subject;
            $tutoruser->prefared_area = $request->prefared_area;
            $tutoruser->prefered_medium = $request->prefered_medium;

            $tutoruser->experience_years = $request->experience_years;
            $tutoruser->experience_subjects = $request->experience_subjects;

            $tutoruser->salar_range_from = $request->salar_range_from;
            $tutoruser->salary_range_to = $request->salary_range_to;

            $user->update();

            $tutoruser->update();

            return redirect()->route('tutor.editprofile',$request->profile_id)->with('message','Your Profile Updated');


        }
    }
}
