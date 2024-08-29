<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UpcomingProjectsRequest;
use App\Models\UpcomingProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UpcomingProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $upcomingProjects = UpcomingProjects::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.project.upcoming_project.index', ['upcomingProjects'=> $upcomingProjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.upcoming_project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpcomingProjectsRequest $request)
    {
        $data = $request->validated();
        try {

            $upcomingProjects = new UpcomingProjects();

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/projects/upcoming_projects/image'), $new_name);

                $image_path = "/bhairaav/projects/upcoming_projects/image" . $new_name;
                $upcomingProjects->image = $new_name;
            }

            $upcomingProjects->project_name = $request->project_name;
            $upcomingProjects->address = $request->address;
            $upcomingProjects->configuration = $request->configuration;
            $upcomingProjects->mobile_no = $request->mobile_no;
            $upcomingProjects->project_type = $request->project_type;
            $upcomingProjects->inserted_at = Carbon::now();
            $upcomingProjects->inserted_by = Auth::user()->id;
            $upcomingProjects->save();

            return redirect()->route('upcoming_projects.index')->with('message','Your record has been successfully created.');

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
        $upcomingProjects = UpcomingProjects::findOrFail($id);
        return view('backend.project.upcoming_project.edit', ['upcomingProjects'=> $upcomingProjects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpcomingProjectsRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $upcomingProjects = UpcomingProjects::findOrFail($id);

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/projects/upcoming_projects/image'), $new_name);

                $image_path = "/bhairaav/projects/upcoming_projects/image" . $new_name;
                $upcomingProjects->image = $new_name;
            }

            $upcomingProjects->project_name = $request->project_name;
            $upcomingProjects->address = $request->address;
            $upcomingProjects->configuration = $request->configuration;
            $upcomingProjects->mobile_no = $request->mobile_no;
            $upcomingProjects->project_type = $request->project_type;
            $upcomingProjects->modified_at = Carbon::now();
            $upcomingProjects->modified_by = Auth::user()->id;
            $upcomingProjects->save();

            return redirect()->route('upcoming_projects.index')->with('message','Your record has been successfully updated.');

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
            $upcomingProjects = UpcomingProjects::findOrFail($id);
            $upcomingProjects->update($data);

            return redirect()->route('upcoming_projects.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
