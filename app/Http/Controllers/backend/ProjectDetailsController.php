<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProjectDetailsRequest;
use App\Models\LocationAdvantage;
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
        $projectDetails = ProjectDetails::with('projectHallmarks', 'projectLocationAdvantages', 'projectAmenities', 'projectGallery')->orderBy("id","desc")->whereNull('deleted_at')->get();

        return view ('backend.project.project_detail.index', ['projectDetails' => $projectDetails]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $featureName = LocationAdvantage::orderBy('id', 'desc')->whereNull('deleted_at')->get(['id', 'feature_name']);
        return view ('backend.project.project_detail.create', ['featureName' => $featureName]);
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
        $projectDetail = ProjectDetails::findOrFail($id);
        $featureName = LocationAdvantage::with('projectHallmarks', 'projectLocationAdvantages', 'projectAmenities', 'projectGallery')->orderBy('id', 'desc')->whereNull('deleted_at')->get(['id', 'feature_name']);

        return view('backend.project.project_detail.edit', ['projectDetail' => $projectDetail, 'featureName' => $featureName]);
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
        $data['deleted_by'] =  Auth::user()->id;
        $data['deleted_at'] =  Carbon::now();
        try {
            $projectDetail = ProjectDetails::findOrFail($id);
            $projectDetail->update($data);

            return redirect()->route('how_work_loyalty_programs.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
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
