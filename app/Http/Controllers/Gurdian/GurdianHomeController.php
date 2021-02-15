<?php

namespace App\Http\Controllers\Gurdian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GurdianHomeController extends Controller
{
        /**
     * Show the TutorProfile dashboard.
     */

    public function index()
    {
        return view('gurdianprofilehome');
    }
}
