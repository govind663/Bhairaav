<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    public function leadership(Request $request){
        return view("frontend.about.leadership");
    }
}
