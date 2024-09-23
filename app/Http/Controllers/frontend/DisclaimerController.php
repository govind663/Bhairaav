<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    public function disclaimer(Request $request){

        return view('frontend.disclaimer.disclaimer');
    }
}
