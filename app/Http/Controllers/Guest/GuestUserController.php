<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Model\ActiveTution;
use Illuminate\Http\Request;
use App\Model\TutorInfo;
use App\User;
use App\Model\ServiceDistrict;
use App\Model\ServiceArea;
use App\Model\ServiceMediumCategory;
use App\Model\ServiceClassCategory;
use App\Model\RequestTutor;
use Illuminate\Http\JsonResponse;

class GuestUserController extends Controller
{

    // Fetch all tutors for guest users
    public function fetchAllTutors()
    {
        $districts = ServiceDistrict::all();
        $mediums  = ServiceMediumCategory::all();

        $tutorusers = User::where('is_tutor', '1')->with('tutorinfo')->paginate(15);

        return view('tutorlist', compact('tutorusers', 'districts', 'mediums'));
    }


    // Submit Form for Request a TUtor
    public function requestForTutor()
    {

        $gdistricts = ServiceDistrict::all();
        $gmediums = ServiceMediumCategory::all();
        // dd($districts);

        return view('requestfortutor', compact('gdistricts', 'gmediums'));
    }

    public function fetchArea(Request $request)
    {

        if ($request->district_name) {

            $district = ServiceDistrict::where('district_name', $request->district_name)->first();

            $area =  ServiceArea::where('district_id', $district->id)->get();


            return response()->json($area);
        }
    }


    // fetch classes acording to medium
    public function fetchClasses(Request $request)
    {
        $medium = ServiceMediumCategory::where('medium_name', $request->medium_name)->first();

        $class = ServiceClassCategory::where('medium_id', $medium->id)->get();

        return response()->json($class);
    }


    // search tutor
    public function searchTutor(Request $request)
    {

        // dd($request->all());
        $searchtutors = TutorInfo::with('getuser');

        if($request->has('district') && $request->district != ''){
            $district = $request->district;

            $searchtutors->where('district_name','LIKE','%'.$district.'%');
        } 

        if($request->has('area') && $request->area != ''){
            $area = $request->area;

            $searchtutors->where('area','LIKE','%'.$area.'%');
        }

        if($request->has('medium') && $request->medium != ''){
            $medium = $request->medium;

            $searchtutors->where('medium','LIKE','%'.$medium.'%');
        }

        if($request->has('classes') && $request->classes != ''){
            $class = $request->classes;

            $searchtutors->where('prefered_class','LIKE','%'.$class.'%');
        }

        if($request->has('subject') && $request->subject != ''){
            $subject = $request->subject;

            $searchtutors->where('prefered_subject','LIKE','%'.$subject.'%');
        }


        if($request->has('gender') && $request->gender != ''){
            $gender = $request->gender;

            $searchtutors->where('gender','=', $gender);
        }

        if($request->has('salary') && $request->salary != ''){
            $salary_range = $request->salary;

            $salary_range_array = explode("-",$salary_range);

            $searchtutors->where('salar_range_from','LIKE','%'.$salary_range_array[0].'%');

        }

        if($request->has('days_per_week') && $request->days_per_week != ''){
            $days_per_week = $request->days_per_week;

            $searchtutors->where('days_per_week','LIKE','%'.$days_per_week.'%');

        }

        if($searchtutors != ''){
           $searchtutorresult = $searchtutors->paginate(15);
        }

        // dd($searchtutorresult);

        $districts = ServiceDistrict::all();
        $mediums = ServiceMediumCategory::all();
        
        return view('searchtutorresult',compact('searchtutorresult','districts','mediums'));
    }


    public function saveRequestForTutor(Request $request){

        // dd($request->all());

        $request->validate([
            'full_name' => 'required',
            'school_university' => 'required',
            'medium' => 'required',
            'subject' => 'required',
            'day_per_week' => 'required|integer',
            'salary_range' => 'required|integer',
            'contact_number' => 'required|integer',
            'district' => 'required',
            'area' => 'required',
            'student_gender' => 'required',
            'tutor_gender' => 'required',
        ]);

        $requesttutor = new RequestTutor();

        $requesttutor->full_name = $request->full_name;
        $requesttutor->school_or_collage = $request->school_university;
        $requesttutor->medium_or_category = $request->medium;
        $requesttutor->class_or_grade = $request->class;
        $requesttutor->subject = $request->subject;
        $requesttutor->days_per_week = $request->day_per_week;
        $requesttutor->desire_tutor_gender = $request->tutor_gender;
        $requesttutor->desire_student_gender = $request->student_gender;
        $requesttutor->salary_range = $request->salary_range;
        $requesttutor->contact_number = $request->contact_number;
        $requesttutor->additional_information = $request->aditional_info;
        $requesttutor->email = $request->email;
        $requesttutor->district = $request->district;
        $requesttutor->area = $request->area;

        $requesttutor->save();

        return redirect()->route('guest.requestfortutor')->with('message','Your Request For Desire Tutor Is Submited wait until MeetTutor contact with you');


    }


    // about us page
    public function aboutUs(){
        return view('aboutus');
    }

    // frequently asked question page
    public function faq(){
        return view('faq');
    }


    // single tutor view detials for public view

    public function tutorProfilePublicView($id){


        $tutor = User::where('id',$id)->with('tutorinfo')->first();

        // dd($tutor);

        return view('singletutorpublicview',compact('tutor'));

    }


    public function activeTutions(){

        $available_tutions = ActiveTution::all();

        return view('activetutions',compact('available_tutions'));
    }


    public function singleActiveTution($id){

        $tution = ActiveTution::find($id);
        if($tution){

             return response()->json($tution);

        }
    }
}
