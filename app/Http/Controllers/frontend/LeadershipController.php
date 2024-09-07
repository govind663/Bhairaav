<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leader;

class LeadershipController extends Controller
{
    public function leadership(Request $request){

        $leader = Leader::orderBy("id","asc")->whereNull('deleted_at')->get();
        // === Decode The Other Description
        foreach ($leader as $leaders) {
            $leaders->other_description = json_decode($leaders->other_description, true); // Decode as associative array
            // dd($leaders->other_description);
        }
        return view("frontend.about.leadership", [
            'leader' => $leader,
        ]);
    }
}
