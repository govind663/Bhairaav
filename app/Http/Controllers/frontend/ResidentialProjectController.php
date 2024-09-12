<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\LocationAdvantage;
use App\Models\ProjectAmenities;
use App\Models\ProjectDetails;
use App\Models\ProjectGallery;
use App\Models\ProjectHallmarks;
use App\Models\ProjectLocationAdvantages;

class ResidentialProjectController extends Controller
{
    public function residentalProject(Request $request)
    {
        $projects = Projects::where('project_type', 1)->where('property_type', 1)->orderBy("id","desc")->whereNull('deleted_at')->get();

        return view("frontend.project.residential-project", ['projects' => $projects,]);
    }

    public function viewProjectDetails(Request $request, string $id){

        // Fetch the main project details
        $projectDetail = ProjectDetails::findOrFail($id);

        $bannerImages = $projectDetail->banner_image;

        // Fetch Project
        $projectNames = Projects::where('id', $id)->first(['project_name']);

        // Fetch related hallmarks
        $projectHallmarks = ProjectHallmarks::where('project_details_id', $id)->get();

        // Convert location advantage IDs to array if needed
        $locationAdvantageIds = is_array($projectDetail->project_location_advantages_id)
                                ? $projectDetail->project_location_advantages_id
                                : explode(',', $projectDetail->project_location_advantages_id);

        // Ensure it's an array
        $locationAdvantageIds = is_array($locationAdvantageIds) ? $locationAdvantageIds : [];

        $locationAdvantages = ProjectLocationAdvantages::whereIn('project_details_id', $locationAdvantageIds)
                                            ->whereNull('deleted_at')
                                            ->orderBy('id', 'desc')
                                            ->get(['id', 'feature_value']);
        // dd($locationAdvantages);

        // Fetch related amenities
        $projectAmenities = ProjectAmenities::where('project_details_id', $id)->get();

        // Fetch related gallery images
        $projectGallery = ProjectGallery::where('project_details_id', $id)->get();

        // Fetch additional data, such as location advantages feature names
        $featureName = LocationAdvantage::orderBy('id', 'desc')->whereNull('deleted_at')->get(['id', 'feature_name']);

        return view('frontend.project.resitational_project_detail', [
            'projectDetail' => $projectDetail,
            'featureName' => $featureName,
            'projectHallmarks' => $projectHallmarks,
            'locationAdvantageIds' => $locationAdvantageIds,
            'locationAdvantages' => $locationAdvantages,
            'projectAmenities' => $projectAmenities,
            'projectGallery' => $projectGallery,
            'bannerImages' => $bannerImages,
            'projectNames' => $projectNames,
        ]);
    }
}
