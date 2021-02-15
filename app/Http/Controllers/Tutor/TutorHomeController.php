<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorHomeController extends Controller
{

     /**
     * Show the TutorProfile dashboard.
     */

    public function index()
    {
        return view('tutorprofilehome');
    }
}
