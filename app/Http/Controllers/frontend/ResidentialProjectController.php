<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResidentialProjectController extends Controller
{
    public function residentalProject(Request $request)
    {
        return view("frontend.project.residential-project");
    }
}
