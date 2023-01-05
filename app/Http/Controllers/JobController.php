<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academic;
use App\Models\Computer;
use App\Models\Contact;
use App\Models\JobExperience;
use App\Models\Personal;
use App\Models\Proficiency;
use App\Models\Temporal;
use App\Models\User;

class JobController extends Controller
{
    //Computer //

    public function viewcomputerskills(){
        return view('computer');
    }
    public  function getcomputerskills(Request $request){
        print_r($request->all());

    }

    // Proficiency //

    public function viewproficiency(){
        return view('proficiency');
    }
    public  function getproficiency(Request $request){
        print_r($request->all());

    }

}
