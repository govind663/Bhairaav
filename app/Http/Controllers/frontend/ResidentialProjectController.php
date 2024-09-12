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

        // Convert location advantage IDs to array if needed jason_encode form
        $locationAdvantageIds = json_decode($projectDetail->project_location_advantages_id);

        // Fetch related location advantages
        $locationAdvantages = ProjectLocationAdvantages::whereIn('id', $locationAdvantageIds)
                                                ->select('id', 'feature_value', 'location_advantage_id')
                                                ->orderBy('id', 'desc')
                                                ->whereNull('deleted_at')
                                                ->get();
        // dd($locationAdvantages);

        // Fetch related amenities
        $projectAmenities = ProjectAmenities::where('project_details_id', $id)->get();

        // Fetch related gallery images
        $projectGallery = ProjectGallery::where('project_details_id', $id)->get();

        // Fetch additional data, such as location advantages feature names
        $featureName = LocationAdvantage::orderBy('id', 'desc')->whereNull('deleted_at')->get(['id']);

        return view('frontend.project.project_detail', [
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
