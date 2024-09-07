<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Journey;
use App\Models\Member;
use App\Models\TheProgressDetail;
use App\Models\Legacy;
use App\Models\Strength;
use App\Models\OurLogo;
use App\Models\Statistics;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function whoWeAre(Request $request){

        // === Fetch The Journey
        $journeys = Journey::orderBy("id","desc")->whereNull('deleted_at')->first();

        // === Fetch The Members
        $members = Member::orderBy("id","desc")->whereNull('deleted_at')->get();

        // === Fetch The Statistics
        $statistics = Statistics::orderBy("id","asc")->whereNull('deleted_at')->get();

        // === Fetch The Progress
        $progressDetails = TheProgressDetail::orderBy("id","desc")->whereNull('deleted_at')->first();

        // === Fetch The Legacy
        $legacies = Legacy::orderBy("id","desc")->whereNull('deleted_at')->first();

        // === Fetch The Strength
        $strengths = Strength::orderBy("id","desc")->whereNull('deleted_at')->get();
        // dd($strengths);

        // === Fetch The Strength Title
        $strengthTitle = Strength::orderBy("inserted_at","desc")->whereNull('deleted_at')->first(['title']);
        // dd($strengthTitle);

        // === Decode The Other Description
        foreach ($strengths as $strength) {
            $strength->other_description = json_decode($strength->other_description, true); // Decode as associative array
        }

        // ==== Fetch Our Logo
        $ourLogos = OurLogo::orderBy("id","desc")->whereNull('deleted_at')->first();
        // dd($ourLogos);

        return view("frontend.about.who-we-are", [
            'journeys' => $journeys,
            'members' => $members,
            'statistics' => $statistics,
            'progressDetails' => $progressDetails,
            'legacies' => $legacies,
            'strengths' => $strengths,
            'strengthTitle' => $strengthTitle,
            'ourLogos' => $ourLogos
        ]);
    }
}
