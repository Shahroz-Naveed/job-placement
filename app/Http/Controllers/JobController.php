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
    // Personal  //
public function viewpersonal(){
    return view ('/');
}

public function storepersonal(){
    //
}


    // Contact  //
    public function viewcontact(){
        return view ('/contact');
    }
    
    public function storecontact(){
        //
    }
    


    // Academic //
    public function viewacademic(){
        return view ('/academic');
    }
    
    public function storeacademic(){
        //
    }



    // Temporal //

    public function viewtemporal(){
        return view ('/temporal');
    }
    
    public function storetemporal(){
        //
    }
    
    
    // Proficiency //

    public function viewproficiency(){
        return view('proficiency');
    }
    public  function storeproficiency(Request $request){
       //

    }
    

    //Computer //

    public function viewcomputerskills(){
        return view('computer');
    }
    public  function storecomputerskills(Request $request){
        //

    }
    

    // JOb Experience  //

    public function viewexperience(){
        return view ('/experience');
    }
    
    public function storeexperience(){
        //
    }



    



}
