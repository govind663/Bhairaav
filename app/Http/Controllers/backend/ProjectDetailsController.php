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

            // Upload Overview Image (project_image)
            if ($request->hasFile('project_image')) {
                $image = $request->file('project_image');
                $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/bhairaav/project_details/project_image'), $new_name);
                $projectDetails->project_image = $new_name;
            }

            // Save Project Details
            $projectDetails->project_type_id = $request->project_type_id;
            $projectDetails->project_name_id = $request->project_name_id;
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
                "gps_link" => $request->gps_link,
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
        $projectNames = Projects::where('id', $id)->get([
            'project_name',
            'id'
        ]);

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

            // Check if new images are uploaded
            if ($request->hasFile('banner_image')) {
                // Add new images to the existing paths
                foreach ($request->file('banner_image') as $image) {
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/bhairaav/project_details/banner_image'), $new_name);
                    $bannerImagePaths[] = $new_name; // Add the new image to the array
                }
            }

            // Update the banner_image with both old and new image paths
            $projectDetails->banner_image = json_encode($bannerImagePaths);

            // Update overview image
            if ($request->hasFile('overview_image')) {
                // Delete old overview image if exists
                File::delete(public_path('/bhairaav/project_details/overview_image/' . $projectDetails->overview_image));

                $image = $request->file('overview_image');
                $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/bhairaav/project_details/overview_image'), $new_name);
                $projectDetails->overview_image = $new_name;
            }

            // Update project_image
            if ($request->hasFile('project_image')) {
                // Delete old overview image if exists
                File::delete(public_path('/bhairaav/project_details/project_image/' . $projectDetails->project_image));

                $image = $request->file('project_image');
                $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/bhairaav/project_details/project_image'), $new_name);
                $projectDetails->project_image = $new_name;
            }

            // Update project details
            $projectDetails->fill($request->only([
                'project_type_id',
                'project_name_id',
                'project_link',
                'project_description'
            ]));
            $projectDetails->modified_at = Carbon::now();
            $projectDetails->modified_by = Auth::user()->id;
            $projectDetails->save();

            // Update hallmarks
            ProjectHallmarks::where('project_details_id', $id)->delete();
            $hallmarkId = [];
            if ($request->has('hallmarks')) {
                foreach ($request->hallmarks as $hallmark) {
                    if (!empty($hallmark)) {
                        $projectHallmark = ProjectHallmarks::create([
                            'project_details_id' => $id,
                            'hallmarks' => $hallmark,
                            'modified_at' => Carbon::now(),
                            'modified_by' => Auth::user()->id,
                        ]);

                        $hallmarkId[] = $projectHallmark->id;
                    }
                }
            }

            // Update location advantages
            ProjectLocationAdvantages::where('project_details_id', $id)->delete();
            $projectLocationAdvantageId = [];
            if ($request->has('feature_value')) {
                foreach ($request->feature_value as $index => $featureValue) {
                    if (!empty($featureValue)) {
                        $projectLocationAdvantage = ProjectLocationAdvantages::create([
                            'project_details_id' => $id,
                            'location_advantage_id' => $request->location_advantage_id[$index],
                            'feature_value' => $featureValue,
                            'modified_at' => Carbon::now(),
                            'modified_by' => Auth::user()->id,
                        ]);

                        $projectLocationAdvantageId[] = $projectLocationAdvantage->id;
                    }
                }
            }

            // Update amenities
            ProjectAmenities::where('project_details_id', $id)->delete();
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
                        } else {
                            // Use existing image if no new image is uploaded
                            $projectAmenities->amenite_image = $request->existing_amenite_image[$index] ?? null;
                        }

                        $projectAmenities->project_details_id = $id;
                        $projectAmenities->amenite_image_name = $ameniteImageName;
                        $projectAmenities->modified_at = Carbon::now();
                        $projectAmenities->modified_by = Auth::user()->id;
                        $projectAmenities->save();

                        $projectAmenitiesId[] = $projectAmenities->id;
                    }
                }
            }

            // Update gallery
            ProjectGallery::where('project_details_id', $id)->delete();
            $projectGalleryId = [];

            // Fetch existing gallery entries first
            $existingGallery = ProjectGallery::where('project_details_id', $id)->get();

            if ($request->has('gallery_image_name')) {
                foreach ($request->gallery_image_name as $index => $imageName) {
                    if (!empty($imageName)) {
                        $projectGallery = new ProjectGallery();

                        if ($request->hasFile('gallery_image.' . $index)) {
                            $image = $request->file('gallery_image.' . $index);
                            $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                            $image->move(public_path('/bhairaav/project_details/gallery_image'), $new_name);
                            $projectGallery->gallery_image = $new_name;
                        } else {
                            // Use existing image if no new image is uploaded (existing_gallery_image)
                            $projectGallery->gallery_image = $request->existing_gallery_image[$index] ?? null;
                        }

                        $projectGallery->project_details_id = $id;
                        $projectGallery->gallery_image_name	 = $imageName;
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
                "gps_link" => $request->gps_link,
                "project_amenities_id" => json_encode($projectAmenitiesId, true),
                "amenities_title" => $request->amenities_title,
                "project_gallery_id" => json_encode($projectGalleryId, true),
                "gallery_title" => $request->gallery_title,
            ];
            ProjectDetails::where('id', $id)->update($update);

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
            ProjectHallmarks::where('project_details_id', $id)->delete();

            // Delete associated location advantages
            ProjectLocationAdvantages::where('project_details_id', $id)->delete();

            // Delete associated amenities
            ProjectAmenities::where('project_details_id', $id)->delete();

            // Delete associated gallery images
            ProjectGallery::where('project_details_id', $id)->delete();

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
