<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompletedProjectController extends Controller
{
    public function completedProject(Request $request)
    {
        return view("frontend.project.completed-project");
    }
}
