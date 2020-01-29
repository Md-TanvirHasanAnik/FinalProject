<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counseling;
use Auth;
use Exceptions;
Use DB;
class CounselingController extends Controller
{
    

    public function createCounseling(Request $r){
              


        Counseling::create([
            'startTime' => $r['startTime'],
            'endTime' => $r['endTime'],
            'day' => $r['day'],
            'no_student' => $r['no_student'],
            'faculty_id' => $r['user_id'],
        ]);

        return "success";

    }

    public function slotting(){

        

    }



}
