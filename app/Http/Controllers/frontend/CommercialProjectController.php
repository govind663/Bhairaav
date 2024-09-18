<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class CommercialProjectController extends Controller
{
    public function commercialProject(Request $request)
    {
        $projects = Projects::where('project_type', 2)->orderBy("id","asc")->whereNull('deleted_at')->get();
        return view("frontend.project.commercial-project" , ['projects' => $projects]);
    }
}
