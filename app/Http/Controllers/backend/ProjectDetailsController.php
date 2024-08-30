<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProjectDetailsRequest;
use App\Models\OngoingProjects;
use App\Models\ProjectDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProjectDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $projectDetails = ProjectDetails::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view ('backend.project.project_detail.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('backend.project.project_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectDetailsRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function fetchProjects(Request $request) {
        $projectStatus = $request->projectTypeId;

        $ongoingProjects = OngoingProjects::where('status', $projectStatus)
            ->orderBy("id", "desc")
            ->whereNull('deleted_at')
            ->get(['id', 'project_name'])
            ->map(function($project) {
                $project->type = 'ongoing';
                return $project;
            });

        $completedProjects = OngoingProjects::where('status', $projectStatus)
            ->orderBy("id", "desc")
            ->whereNull('deleted_at')
            ->get(['id', 'project_name'])
            ->map(function($project) {
                $project->type = 'completed';
                return $project;
            });

        $upcomingProjects = OngoingProjects::where('status', $projectStatus)
            ->orderBy("id", "desc")
            ->whereNull('deleted_at')
            ->get(['id', 'project_name'])
            ->map(function($project) {
                $project->type = 'upcoming';
                return $project;
            });

        // Merge all projects into a single collection
        $allProjects = $ongoingProjects->merge($completedProjects)->merge($upcomingProjects);

        return response()->json([
            'projects' => $allProjects
        ]);
    }

}
