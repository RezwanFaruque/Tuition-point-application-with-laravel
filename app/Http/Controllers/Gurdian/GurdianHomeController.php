<?php

namespace App\Http\Controllers\Gurdian;

use App\Http\Controllers\Controller;
use App\Model\ServiceArea;
use App\Model\ServiceClassCategory;
use Illuminate\Http\Request;
use App\User;
use App\Model\ServiceDistrict;
use App\Model\ServiceMediumCategory;
use Illuminate\Http\JsonResponse;

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

        if($request->district){
            $district = $request->district;
        }
        if($request->area){
            $area = $request->area;
        }
        if($request->medium){
            $medium = $request->medium;
        }

        if($request->classes){
            $classes= $request->classes;
        }
        
        if($request->subject){
            $subject = $request->subject;
        }

        if($request->gender){
            $gender = $request->gender;
        }

        if($request->salary_range){
            $salary_range = $request->salary_range;
        }
        if($request->days_per_week){
            $days_per_week = $request->days_per_week;
        }
    }


}
