<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpcomingProjectController extends Controller
{
    public function upcomingProject(Request $request)
    {
        return view("frontend.project.upcoming-project");
    }
}
