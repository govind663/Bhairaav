<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\LatestUpdate;
use App\Models\Slider;
use App\Models\LegacyOfExcellence as ModelsLegacyOfExcellence;
use App\Models\Testimonial;
use App\Models\WhyChooseBhairaav;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        // ==== Fetch Banner
        $sliders = Slider::orderBy("id","desc")->whereNull('deleted_at')->get();
        // dd($sliders);

        // ==== Fetch Legacy of Excellence
        $legacy = ModelsLegacyOfExcellence::orderBy("id","desc")->whereNull('deleted_at')->get();

        // ==== Fetch Why Choose Bhairaav
        $whyChooseBhairaavs = WhyChooseBhairaav::orderBy("id","desc")->whereNull('deleted_at')->get();

        // ==== Fetch Testimonials
        $testimonials = Testimonial::orderBy("id","desc")->whereNull('deleted_at')->get();

        // ==== Fetch NEWS & MEDIA
        $latestUpdates = LatestUpdate::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view("frontend.home", [
            'sliders' => $sliders,
            'legacy' => $legacy,
            'whyChooseBhairaavs' => $whyChooseBhairaavs,
            'testimonials' => $testimonials,
            'latestUpdates' => $latestUpdates
        ]);
    }
}
