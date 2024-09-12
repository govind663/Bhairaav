<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class CompletedProjectController extends Controller
{
    public function completedProject(Request $request, $projectId, $projectType)
    {
        $projects = Projects::where('project_type', $projectId)->where('property_type', $projectType)->orderBy("id","desc")->whereNull('deleted_at')->get();

        return view("frontend.project.completed-project" , ['projects' => $projects, 'projectType' => $projectType]);
    }
}
