<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\LocationAdvantage;
use App\Models\Phase;
use App\Models\ProjectAmenities;
use App\Models\ProjectDetails;
use App\Models\ProjectGallery;
use App\Models\ProjectHallmarks;
use App\Models\ProjectLocationAdvantages;

class ResidentialProjectController extends Controller
{
    public function residentalProject(Request $request)
    {
        $projects = Projects::where('project_type', 1)
            ->where('property_type', 1)->orderBy("id","asc")->whereNull('deleted_at')->get();
        return view("frontend.project.residential-project", ['projects' => $projects,]);
    }

    public function viewProjectDetails(Request $request, string $id)
    {
        // Fetch the main project details
        $projectDetail = ProjectDetails::findOrFail($id);

        $bannerImages = $projectDetail->banner_image;

        // Fetch Project
        $projectNames = Projects::where('id', $id)->first(['project_name']);

        // Fetch maha_rera_registration_number, phase_id
        $projectRera = Projects::where('id', $id)->first(['maha_rera_registration_number', 'phase_id']);

        // Fetch related hallmarks
        $projectHallmarks = ProjectHallmarks::where('project_details_id', $id)->get();

        // Convert location advantage IDs to array if needed
        $locationAdvantageIds = json_decode($projectDetail->project_location_advantages_id);

        // Fetch related location advantages
        $locationAdvantages = ProjectLocationAdvantages::whereIn('id', $locationAdvantageIds)
            ->select('id', 'feature_value', 'location_advantage_id')
            ->orderBy('id', 'desc')
            ->whereNull('deleted_at')
            ->get();

        // Fetch related amenities
        $projectAmenities = ProjectAmenities::where('project_details_id', $id)->get();

        // Fetch related gallery images
        $projectGallery = ProjectGallery::where('project_details_id', $id)->get();

        // Fetch additional data, such as location advantages feature names
        $featureName = LocationAdvantage::orderBy('id', 'desc')->whereNull('deleted_at')->get(['id']);

        // Fetch phase names based on phase IDs
        $phaseIds = json_decode($projectRera->phase_id);
        $phases = Phase::whereIn('id', $phaseIds)->pluck('name', 'id')->toArray();

        // Assuming maha_rera_registration_number is an array of RERA numbers, decode it
        $reraNumbers = json_decode($projectRera->maha_rera_registration_number);
        // dd($reraNumbers);

        // === Append in this mannerMahaRERA Registration No.: Phase I - P51700012365 | Phase II - P51700010579
        $phaseReraInfo = [];
        foreach ($phaseIds as $phaseId) {
            if (isset($reraNumbers[$phaseId])) {
                $phaseReraInfo[$phaseId] = $reraNumbers[$phaseId];
            }
        }
        // dd($phaseReraInfo);

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
            'projectRera' => $projectRera,
            'phases' => $phases,
            'phaseReraInfo' => $phaseReraInfo,
            'reraNumbers' => $reraNumbers
        ]);
    }

}
