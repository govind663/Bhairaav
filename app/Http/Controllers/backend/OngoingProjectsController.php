<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\OngoingProjectsRequest;
use App\Models\OngoingProjects;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OngoingProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ongoingProjects = OngoingProjects::orderBy('id', 'desc')->whereNull('deleted_at')->get();

        return view('backend.project.ongoing_project.index', ['ongoingProjects' => $ongoingProjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.ongoing_project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OngoingProjectsRequest $request)
    {
        $data = $request->validated();
        try {

            $ongoingProjects = new OngoingProjects();

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/projects/ongoing_projects/image'), $new_name);

                $image_path = "/bhairaav/projects/ongoing_projects/image" . $new_name;
                $ongoingProjects->image = $new_name;
            }

            $ongoingProjects->project_name = $request->project_name;
            $ongoingProjects->address = $request->address;
            $ongoingProjects->configuration = $request->configuration;
            $ongoingProjects->mobile_no = $request->mobile_no;
            $ongoingProjects->project_type = $request->project_type;
            $ongoingProjects->inserted_at = Carbon::now();
            $ongoingProjects->inserted_by = Auth::user()->id;
            $ongoingProjects->save();

            return redirect()->route('ongoing_projects.index')->with('message','Your record has been successfully created.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
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
        $ongoingProjects = OngoingProjects::findOrFail($id);

        return view('backend.project.ongoing_project.edit', ['ongoingProjects' => $ongoingProjects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OngoingProjectsRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $ongoingProjects = OngoingProjects::findOrFail($id);

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/projects/ongoing_projects/image'), $new_name);

                $image_path = "/bhairaav/projects/ongoing_projects/image" . $new_name;
                $ongoingProjects->image = $new_name;
            }

            $ongoingProjects->project_name = $request->project_name;
            $ongoingProjects->address = $request->address;
            $ongoingProjects->configuration = $request->configuration;
            $ongoingProjects->mobile_no = $request->mobile_no;
            $ongoingProjects->project_type = $request->project_type;
            $ongoingProjects->modified_at = Carbon::now();
            $ongoingProjects->modified_by = Auth::user()->id;
            $ongoingProjects->save();

            return redirect()->route('ongoing_projects.index')->with('message','Your record has been successfully updated.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
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
            $ongoingProjects = OngoingProjects::findOrFail($id);
            $ongoingProjects->update($data);

            return redirect()->route('ongoing_projects.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
