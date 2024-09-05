<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeam;

class OurTeamController extends Controller
{
    public function ourTeam(Request $request){

        $teams = OurTeam::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view("frontend.about.our-team", ['teams' => $teams]);
    }
}
