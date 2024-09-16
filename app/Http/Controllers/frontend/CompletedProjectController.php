<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class CompletedProjectController extends Controller
{
    public function completedProject(Request $request, $projectId)
    {
        $projects = Projects::where('project_type', $projectId)->orderBy("id","asc")->whereNull('deleted_at')->get();

        return view("frontend.project.completed-project" , ['projects' => $projects]);
    }
}
