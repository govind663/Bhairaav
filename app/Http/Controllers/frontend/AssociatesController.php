<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssociatesController extends Controller
{
    public function associates(Request $request){
        return view("frontend.about.associates");
    }
}
