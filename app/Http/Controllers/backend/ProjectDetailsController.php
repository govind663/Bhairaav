<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProjectDetailsRequest;
use App\Models\LocationAdvantage;
use App\Models\ProjectAmenities;
use App\Models\ProjectDetails;
use App\Models\ProjectGallery;
use App\Models\ProjectHallmarks;
use App\Models\ProjectLocationAdvantages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use App\Models\Projects;


class ProjectDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectDetails = ProjectDetails::with('projectHallmarks', 'projectLocationAdvantages', 'projectAmenities', 'projectGallery', 'projectName')->orderBy("id","desc")->whereNull('deleted_at')->get();

        return view ('backend.project.project_page.index', ['projectDetails' => $projectDetails]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $featureName = LocationAdvantage::orderBy('id', 'desc')->whereNull('deleted_at')->get(['id', 'feature_name']);

        return view ('backend.project.project_page.create', ['featureName' => $featureName]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectDetailsRequest $request)
    {

        $data = $request->validated();

        // DB::beginTransaction();

        try {
            $projectDetails = new ProjectDetails();

            // Upload multiple project banner images
            $bannerImagePaths = [];
            if ($request->hasFile('banner_image')) {
                foreach ($request->file('banner_image') as $image) {
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/bhairaav/project_details/banner_image'), $new_name);
                    $bannerImagePaths[] = $new_name;
                }
                $projectDetails->banner_image = json_encode($bannerImagePaths);
            }

            // Upload Overview Image (overview_image)
            if ($request->hasFile('overview_image')) {
                $image = $request->file('overview_image');
                $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/bhairaav/project_details/overview_image'), $new_name);
                $projectDetails->overview_image = $new_name;
            }

            // Save Project Details
            $projectDetails->project_type_id = $request->project_type_id;
            $projectDetails->project_name_id = $request->project_name_id;
            $projectDetails->maha_rera_registration_number = $request->maha_rera_registration_number;
            $projectDetails->project_link = $request->project_link;
            $projectDetails->project_description = $request->project_description;
            $projectDetails->inserted_at = Carbon::now();
            $projectDetails->inserted_by = Auth::user()->id;
            $projectDetails->save();

            $lastInsertedId = $projectDetails->id;

            $hallmarkId = [];
            if ($request->has('hallmarks')) {
                foreach ($request->hallmarks as $hallmark) {
                    if (!empty($hallmark)) {
                        $projectHallmarks = new ProjectHallmarks();
                        $projectHallmarks->project_details_id = $lastInsertedId;
                        $projectHallmarks->hallmarks = $hallmark; // Store individual hallmark
                        $projectHallmarks->inserted_at = Carbon::now();
                        $projectHallmarks->inserted_by = Auth::user()->id;
                        $projectHallmarks->save();

                        $hallmarkId[] = $projectHallmarks->id;
                    }
                }
            }

            $projectLocationAdvantageId = [];
            if ($request->has('feature_value')) {
                foreach ($request->feature_value as $index => $featureValue) {
                    if (!empty($featureValue)) {
                        $projectLocationAdvantages = new ProjectLocationAdvantages();
                        $projectLocationAdvantages->project_details_id = $lastInsertedId;
                        $projectLocationAdvantages->location_advantage_id = $request->location_advantage_id[$index];
                        $projectLocationAdvantages->feature_value = $featureValue;
                        $projectLocationAdvantages->inserted_at = Carbon::now();
                        $projectLocationAdvantages->inserted_by = Auth::user()->id;
                        $projectLocationAdvantages->save();

                        $projectLocationAdvantageId[] = $projectLocationAdvantages->id;
                    }
                }
            }

            $projectAmenitiesId = [];
            if ($request->has('amenite_image_name')) {
                foreach ($request->amenite_image_name as $index => $ameniteImageName) {
                    if (!empty($ameniteImageName)) {
                        $projectAmenities = new ProjectAmenities();

                        if ($request->hasFile('amenite_image.' . $index)) {
                            $image = $request->file('amenite_image.' . $index);
                            $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                            $image->move(public_path('/bhairaav/project_details/amenity_images'), $new_name);
                            $projectAmenities->amenite_image = $new_name;
                        }

                        $projectAmenities->project_details_id = $lastInsertedId;
                        $projectAmenities->amenite_image_name = $ameniteImageName;
                        $projectAmenities->inserted_at = Carbon::now();
                        $projectAmenities->inserted_by = Auth::user()->id;
                        $projectAmenities->save();

                        $projectAmenitiesId[] = $projectAmenities->id;
                    }
                }
            }

            $projectGalleryId = [];
            if ($request->has('gallery_image_name')) {
                foreach ($request->gallery_image_name as $index => $imageName) {
                    if (!empty($imageName)) {
                        $projectGallery = new ProjectGallery();

                        if ($request->hasFile('gallery_image.' . $index)) {
                            $image = $request->file('gallery_image.' . $index);
                            $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                            $image->move(public_path('/bhairaav/project_details/gallery_image'), $new_name);
                            $projectGallery->gallery_image = $new_name;
                        }

                        $projectGallery->project_details_id = $lastInsertedId;
                        $projectGallery->gallery_image_name	 = $imageName;
                        $projectGallery->inserted_at = Carbon::now();
                        $projectGallery->inserted_by = Auth::user()->id;
                        $projectGallery->save();

                        $projectGalleryId[] = $projectGallery->id;
                    }
                }
            }

            // Update Project Details with associated IDs
            $update = [
                "project_hallmarks_id" => json_encode($hallmarkId, true),
                "project_location_advantages_id" => json_encode($projectLocationAdvantageId, true),
                "location_advantages_title" => $request->location_advantages_title,
                "project_amenities_id" => json_encode($projectAmenitiesId, true),
                "amenities_title" => $request->amenities_title,
                "project_gallery_id" => json_encode($projectGalleryId, true),
                "gallery_title" => $request->gallery_title,
            ];
            ProjectDetails::where('id', $lastInsertedId)->update($update);

            // DB::commit();

            return redirect()->route('project-details.index')->with('message','Your record has been successfully updated.');

        } catch (\Exception $ex) {
            // DB::rollBack();
            return redirect()->back()->with('error','Something went wrong - ' . $ex->getMessage());
        }
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
        // Fetch the main project details
        $projectDetail = ProjectDetails::findOrFail($id);

        $bannerImages = $projectDetail->banner_image;

        // Fetch Project
        $projectNames = Projects::where('id', $id)->get();

        // Fetch related hallmarks
        $projectHallmarks = ProjectHallmarks::where('project_details_id', $id)->get();

        // Fetch related location advantages
        $projectLocationAdvantages = ProjectLocationAdvantages::where('project_details_id', $id)->get();

        // Fetch related amenities
        $projectAmenities = ProjectAmenities::where('project_details_id', $id)->get();

        // Fetch related gallery images
        $projectGallery = ProjectGallery::where('project_details_id', $id)->get();

        // Fetch additional data, such as location advantages feature names
        $featureName = LocationAdvantage::orderBy('id', 'desc')->whereNull('deleted_at')->get(['id', 'feature_name']);

        // Pass all fetched data to the edit view
        return view('backend.project.project_page.edit', [
            'projectDetail' => $projectDetail,
            'featureName' => $featureName,
            'projectHallmarks' => $projectHallmarks,
            'projectLocationAdvantages' => $projectLocationAdvantages,
            'projectAmenities' => $projectAmenities,
            'projectGallery' => $projectGallery,
            'bannerImages' => $bannerImages,
            'projectNames' => $projectNames,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectDetailsRequest $request, $id)
    {
        $data = $request->validated();

        // Find the existing project detail record
        $projectDetails = ProjectDetails::findOrFail($id);

        // DB::beginTransaction();

        try {
            // Update banner images
            $bannerImagePaths = json_decode($projectDetails->banner_image, true) ?? [];
            if ($request->hasFile('banner_image')) {
                // Remove existing images if required (logic depends on your needs)
                foreach ($projectDetails->banner_image as $existingImage) {
                    // Delete old images from storage
                    File::delete(public_path('/bhairaav/project_details/banner_image/' . $existingImage));
                }

                $bannerImagePaths = []; // Clear the old images
                foreach ($request->file('banner_image') as $image) {
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/bhairaav/project_details/banner_image'), $new_name);
                    $bannerImagePaths[] = $new_name;
                }
                $projectDetails->banner_image = json_encode($bannerImagePaths);
            }

            // Update overview image
            if ($request->hasFile('overview_image')) {
                // Delete old overview image if exists
                // File::delete(public_path('/bhairaav/project_details/overview_image/' . $projectDetails->overview_image));

                $image = $request->file('overview_image');
                $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/bhairaav/project_details/overview_image'), $new_name);
                $projectDetails->overview_image = $new_name;
            }

            // Update project details
            $projectDetails->project_type_id = $request->project_type_id;
            $projectDetails->project_name_id = $request->project_name_id;
            $projectDetails->maha_rera_registration_number = $request->maha_rera_registration_number;
            $projectDetails->project_link = $request->project_link;
            $projectDetails->project_description = $request->project_description;
            $projectDetails->modified_at = Carbon::now();
            $projectDetails->modified_by = Auth::user()->id;
            $projectDetails->save();

            $lastInsertedId = $projectDetails->id;

            // Update hallmarks
            ProjectHallmarks::where('project_details_id', $lastInsertedId)->delete(); // Remove old entries
            $hallmarkId = [];
            if ($request->has('hallmarks')) {
                foreach ($request->hallmarks as $hallmark) {
                    if (!empty($hallmark)) {
                        $projectHallmarks = new ProjectHallmarks();
                        $projectHallmarks->project_details_id = $lastInsertedId;
                        $projectHallmarks->hallmarks = $hallmark;
                        $projectHallmarks->modified_at = Carbon::now();
                        $projectHallmarks->modified_by = Auth::user()->id;
                        $projectHallmarks->save();

                        $hallmarkId[] = $projectHallmarks->id;
                    }
                }
            }

            // Update location advantages
            ProjectLocationAdvantages::where('project_details_id', $lastInsertedId)->delete(); // Remove old entries
            $projectLocationAdvantageId = [];
            if ($request->has('feature_value')) {
                foreach ($request->feature_value as $index => $featureValue) {
                    if (!empty($featureValue)) {
                        $projectLocationAdvantages = new ProjectLocationAdvantages();
                        $projectLocationAdvantages->project_details_id = $lastInsertedId;
                        $projectLocationAdvantages->location_advantage_id = $request->location_advantage_id[$index];
                        $projectLocationAdvantages->feature_value = $featureValue;
                        $projectLocationAdvantages->modified_at = Carbon::now();
                        $projectLocationAdvantages->modified_by = Auth::user()->id;
                        $projectLocationAdvantages->save();

                        $projectLocationAdvantageId[] = $projectLocationAdvantages->id;
                    }
                }
            }

            // Update amenities
            ProjectAmenities::where('project_details_id', $lastInsertedId)->delete(); // Remove old entries
            $projectAmenitiesId = [];
            if ($request->has('amenite_image_name')) {
                foreach ($request->amenite_image_name as $index => $ameniteImageName) {
                    if (!empty($ameniteImageName)) {
                        $projectAmenities = new ProjectAmenities();

                        if ($request->hasFile('amenite_image.' . $index)) {
                            $image = $request->file('amenite_image.' . $index);
                            $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                            $image->move(public_path('/bhairaav/project_details/amenity_images'), $new_name);
                            $projectAmenities->amenite_image = $new_name;
                        }

                        $projectAmenities->project_details_id = $lastInsertedId;
                        $projectAmenities->amenite_image_name = $ameniteImageName;
                        $projectAmenities->modified_at = Carbon::now();
                        $projectAmenities->modified_by = Auth::user()->id;
                        $projectAmenities->save();

                        $projectAmenitiesId[] = $projectAmenities->id;
                    }
                }
            }

            // Update gallery
            ProjectGallery::where('project_details_id', $lastInsertedId)->delete(); // Remove old entries
            $projectGalleryId = [];
            if ($request->has('gallery_image_name')) {
                foreach ($request->gallery_image_name as $index => $imageName) {
                    if (!empty($imageName)) {
                        $projectGallery = new ProjectGallery();

                        if ($request->hasFile('gallery_image.' . $index)) {
                            $image = $request->file('gallery_image.' . $index);
                            $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                            $image->move(public_path('/bhairaav/project_details/gallery_image'), $new_name);
                            $projectGallery->gallery_image = $new_name;
                        }

                        $projectGallery->project_details_id = $lastInsertedId;
                        $projectGallery->gallery_image_name = $imageName;
                        $projectGallery->modified_at = Carbon::now();
                        $projectGallery->modified_by = Auth::user()->id;
                        $projectGallery->save();

                        $projectGalleryId[] = $projectGallery->id;
                    }
                }
            }

            // Update Project Details with associated IDs
            $update = [
                "project_hallmarks_id" => json_encode($hallmarkId, true),
                "project_location_advantages_id" => json_encode($projectLocationAdvantageId, true),
                "location_advantages_title" => $request->location_advantages_title,
                "project_amenities_id" => json_encode($projectAmenitiesId, true),
                "amenities_title" => $request->amenities_title,
                "project_gallery_id" => json_encode($projectGalleryId, true),
                "gallery_title" => $request->gallery_title,
            ];
            ProjectDetails::where('id', $lastInsertedId)->update($update);

            // DB::commit();

            return redirect()->route('project-details.index')->with('message', 'Your record has been successfully updated.');

        } catch (\Exception $ex) {
            // DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong - ' . $ex->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data['deleted_by'] =  Auth::user()->id;
        $data['deleted_at'] =  Carbon::now();
        try {
            // Find the project details record
            ProjectDetails::findOrFail($id)->update($data);

            // Delete associated hallmarks
            ProjectHallmarks::where('project_details_id', $id)->update($data);

            // Delete associated location advantages
            ProjectLocationAdvantages::where('project_details_id', $id)->update($data);

            // Delete associated amenities
            ProjectAmenities::where('project_details_id', $id)->update($data);

            // Delete associated gallery images
            ProjectGallery::where('project_details_id', $id)->update($data);

            return redirect()->route('project-details.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }

    public function fetchProjects(Request $request) {
        $projectStatus = $request->projectTypeId;

        $ongoingProjects = Projects::where('project_type', $projectStatus)
                            ->orderBy("id", "desc")
                            ->whereNull('deleted_at')
                            ->get(['id', 'project_name']);

        // Merge all projects into a single collection
        $allProjects = $ongoingProjects;

        return response()->json([
            'projects' => $allProjects
        ]);
    }

}
