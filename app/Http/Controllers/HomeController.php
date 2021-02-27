<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ServiceDistrict;
use App\Model\ServiceMediumCategory;

class HomeController extends Controller
{
    public function welcome(){

        $districts = ServiceDistrict::all();
        $mediums = ServiceMediumCategory::all();
        
        return view('welcome',compact('districts','mediums'));
    }


    public function fetchArea(Request $request){

        dd($request->all());

    }

    public function fetchClasses(Request $request){

    }
}
