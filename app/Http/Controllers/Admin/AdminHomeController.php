<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TutorInfo;
use App\Model\GurdianInfo;
use App\Model\ActiveTution;
use App\Model\ServiceDistrict;
use App\Model\ServiceArea;
use App\Model\ServiceClassCategory;
use App\Model\AppliedTutorForTution;
use App\Model\RequestTutor;
use Illuminate\Http\JsonResponse;

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


        return view('admin.adminhome', compact('alltutors', 'allgurdians', 'activetutions'));
    }


    // all service district
    public function allServiceDistrict()
    {

        $alldistrict = ServiceDistrict::with('area')->get();
        // dd($alldistrict);

        return view('admin.allservicedestrict', compact('alldistrict'));
    }



    // add service district view
    public function addserviceDistrictView()
    {
        return view('admin.addservicedistrict');
    }

    // add district 
    public function addServiceDistrict(Request $request)
    {

        $district =  new ServiceDistrict();

        $district->district_name = $request->district_name;

        $district->save();


        return redirect()->route('admin.tutorservicedistrict')->with('message', 'District Added Successfully!');
    }


    // delete district
    public function deleteDistrict($id)
    {

        $district = ServiceDistrict::find($id);
        if ($district) {
            $district->delete();
            return redirect()->route('admin.tutorservicedistrict')->with('message', 'District Deleted Successfully');
        }
    }


    // Service area view
    public function addServiceAreaView()
    {

        $districts = ServiceDistrict::all();

        return view('admin.addservicearea', compact('districts'));
    }

    // save service area
    public function saveServiceArea(Request $request)
    {


        $request->validate([
            'district_id' => 'required',
            'area_name'  => 'required',
        ]);

        $area = new ServiceArea();

        $area->area_name = $request->area_name;
        $area->district_id = $request->district_id;

        $area->save();
        return redirect()->route('admin.tutorservicedistrict')->with('message', 'Area Added to Particular District');
    }


    // all mediums list

    // public function allMediums(){

    // }


    public function allTutions(){

        $activetutions = ActiveTution::all();

        return view('admin.activetutions',compact('activetutions'));
    }



    public function addTuionsView(){

        $classes = ServiceClassCategory::all();

        return view('admin.addtution',compact('classes'));
    }


    // save tutions
    public function saveTutions(Request $request){
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'full_name' => 'required',
            'student_gender' => 'required',
            'classes' => 'required',
            'days_per_week'  => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'location' => 'required',
            'desire_tutor_gender' => 'required',
            'salary_range' => 'required',
            'email' => 'required',
        ]);


        $active_tution = new ActiveTution();

        $active_tution->title = $request->title;
        $active_tution->tutor_id = uniqid(rand(5,7000000));
        $active_tution->full_name = $request->full_name;
        $active_tution->student_gender = $request->student_gender;
        $active_tution->class = $request->classes;
        $active_tution->days_per_week = $request->days_per_week;
        $active_tution->address = $request->address;
        $active_tution->phone_number = $request->phone_number;
        $active_tution->location = $request->location;
        $active_tution->desire_tutor_gender = $request->desire_tutor_gender;
        
        $subjects = implode(",",$request->subjects);


        $active_tution->subjects = $subjects;

        $active_tution->salary_range = $request->salary_range;
        $active_tution->email = $request->email;

        $active_tution->save();

        if($active_tution->save()){
            return redirect()->route('admin.alltutions')->with('message','Tution added successfully');
        }
    }


   

    // edit save tution
    public function editSaveTution($id){

        $tutor = ActiveTution::find($id);
        $classes = ServiceClassCategory::all();
        $applied_tutor = AppliedTutorForTution::where('active_tution_post_id',$id)->get();

        return view('admin.editactivetution',compact('tutor','classes','applied_tutor'));
        

    }

    // update tutions
    public function updateTution(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'full_name' => 'required',
            'student_gender' => 'required',
            'classes' => 'required',
            'days_per_week'  => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'location' => 'required',
            'desire_tutor_gender' => 'required',
            'salary_range' => 'required',
            'email' => 'required',
        ]);


        $active_tution =  ActiveTution::find($id);

        $active_tution->title = $request->title;
        $active_tution->tutor_id = uniqid(rand(5,7000000));
        $active_tution->full_name = $request->full_name;
        $active_tution->student_gender = $request->student_gender;
        $active_tution->class = $request->classes;
        $active_tution->days_per_week = $request->days_per_week;
        $active_tution->address = $request->address;
        $active_tution->phone_number = $request->phone_number;
        $active_tution->location = $request->location;
        $active_tution->desire_tutor_gender = $request->desire_tutor_gender;
        
        $subjects = implode(",",$request->subjects);


        $active_tution->subjects = $subjects;

        $active_tution->salary_range = $request->salary_range;
        $active_tution->email = $request->email;

        $active_tution->update();

        if($active_tution->update()){
            return redirect()->route('admin.editsavetution',$id)->with('message','Tution Updated successfully');
        }

    }

    // delete tution
    public function deleteTution($id){

        $active_tution =  ActiveTution::find($id);

        if($active_tution){
            $active_tution->delete();

            return redirect()->route('admin.alltutions')->with('message','Tution Deleted successfully');
        }

    }




    



    // view all request tutor
    public function getRequestTutorList(){

        $request_tutors = RequestTutor::all();

        return view('admin.requesttutors',compact('request_tutors'));

    }

    // view single request tutor
    public function viewRequestTutor($id){

        $request_tutor = RequestTutor::find($id);
        if($request_tutor){

            return response()->json($request_tutor);
        }

    }


    // delete single request tutor
    public function deleteRequestTutor($id){

    }
}
