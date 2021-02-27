<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TutorInfo;
use App\User;
use App\Model\ServiceDistrict;
use App\Model\ServiceArea;
use App\Model\ServiceMediumCategory;
use App\Model\ServiceClassCategory;
use Illuminate\Http\JsonResponse;

class GuestUserController extends Controller
{

    // Fetch all tutors for guest users
    public function fetchAllTutors()
    {
        $districts = ServiceDistrict::all();
        $mediums  = ServiceMediumCategory::all();

        $tutorusers = User::where('is_tutor', '1')->with('tutorinfo')->paginate(15);

        return view('tutorlist', compact('tutorusers','districts','mediums'));
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
    public function fetchClasses(Request $request){
         $medium = ServiceMediumCategory::where('medium_name',$request->medium_name)->first();

        $class = ServiceClassCategory::where('medium_id',$medium->id)->get();

        return response()->json($class);
    }


    // search tutor
    public function searchTutor(Request $request){

        dd($request->all());
    }
}
