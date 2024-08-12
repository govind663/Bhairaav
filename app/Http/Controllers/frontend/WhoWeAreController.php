<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function whoWeAre(Request $request){
        return view("frontend.about.who-we-are");
    }
}
