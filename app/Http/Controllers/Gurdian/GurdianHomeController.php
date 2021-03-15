<?php

namespace App\Http\Controllers\Gurdian;

use App\Http\Controllers\Controller;
use App\Model\ServiceArea;
use App\Model\ServiceClassCategory;
use Illuminate\Http\Request;
use App\User;
use App\Model\ServiceDistrict;
use App\Model\ServiceMediumCategory;
use App\Model\TutorInfo;
use App\Model\TutorFeedback;
use App\Model\RequestTutor;
use Illuminate\Http\JsonResponse;
use PDO;

class GurdianHomeController extends Controller
{
        /**
     * Show the TutorProfile dashboard.
     */

    public function index()
    {
        return view('gurdianprofilehome');
    }


        /**
     * Show All TutorProfiles for Authenticated gurdian.
     */

    public function fetchAllTutors(){

        $districts = ServiceDistrict::all();
        $mediums = ServiceMediumCategory::all();


        $tutorusers = User::where('is_tutor','1')->with('tutorinfo')->paginate(15);

        return view('gurdian.tutorlistforgurdian',compact('tutorusers','districts','mediums'));
    }


        /**
     * Show form for request tutor to authenticated gurdian.
     * 
     */


     public function requestTutor(){

        $districts = ServiceDistrict::all();
        $mediums = ServiceMediumCategory::all();

         return view('gurdian.requestfortutor',compact('districts','mediums'));
     }

    //  fetch area acording to district
     public function fetchArea(Request $request){

        // dd($request->all());

        $district = ServiceDistrict::where('district_name',$request->district_name)->first();

        $area = ServiceArea::where('district_id',$district->id)->get();

        return response()->json($area);

     }

    //  fetch classes acording to medium
     public function fetchClass(Request $request){

        $medium = ServiceMediumCategory::where('medium_name',$request->medium_name)->first();

        $class = ServiceClassCategory::where('medium_id',$medium->id)->get();

        return response()->json($class);

     }


    //  search Tutor

    public function searchTutor(Request $request){

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

        // dd($searchtutors->get());


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


        return view('gurdian.searchtutorresult',compact('searchtutorresult','districts','mediums'));
    }


    // save request for tutor
    public function saveRequestTutor(Request $request){

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

        return redirect()->route('gurdian.requestfortutor')->with('message','Your Request For Desire Tutor Is Submited wait until MeetTutor contact with you');
    }


    // gurdian about us page
    public function aboutUs(){
        return view('aboutus');
    }


    // gurdian faq
    public function faq(){
        return view('faq');
    }


    // public view
     public function singleTutorPublic($id){

         $tutor = User::where('id',$id)->with('tutorinfo')->first();
         $tutor_feedbacks = TutorFeedback::where('tutor_id',$id)->get();

        return view('singletutorpublicview',compact('tutor','tutor_feedbacks'));
        
    }


    // premium tutors
    public function getPremiumTutor(){
        $premium_tutors  = TutorInfo::where('is_premium','1')->with('getuser')->paginate(15);

        $districts = ServiceDistrict::all();

        $mediums = ServiceMediumCategory::all();


        return view('premiumtutorlist',compact('premium_tutors','districts','mediums'));

        
    }

    // Give Feedbak to a tutor
    public function giveFeedback(Request $request){
        
        $request->validate([
            'name' => 'required',
            'feedback_message' => 'required',
            'mobile_number' => 'required',
        ]);


        
        $feedback = new TutorFeedback();

        $feedback->tutor_id = $request->tutor_id;
        $feedback->name = $request->name;
        $feedback->phone_number = $request->mobile_number;
        $feedback->feedback_message = $request->feedback_message;

        $feedback->save();

        return redirect()->route('gurdian.singletutor',$request->tutor_id)->with('message','Thank you for your Feedback');


    }

}
