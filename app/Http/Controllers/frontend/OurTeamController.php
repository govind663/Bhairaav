<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function ourTeam(Request $request){
        return view("frontend.about.our-team");
    }
}
