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
        
    }
}
