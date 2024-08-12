<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OngoingProjectController extends Controller
{
    public function ongoingProject(Request $request)
    {
        return view("frontend.project.ongoing-project");
    }
}
