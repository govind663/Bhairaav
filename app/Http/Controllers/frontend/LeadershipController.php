<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leader;

class LeadershipController extends Controller
{
    public function leadership(Request $request){

        $leader = Leader::orderBy("id","asc")->whereNull('deleted_at')->get();
        return view("frontend.about.leadership", ['leader' => $leader]);
    }
}
