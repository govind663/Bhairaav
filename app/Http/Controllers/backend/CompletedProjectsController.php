<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CompletedProjectsRequest;
use App\Models\CompletedProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CompletedProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $completedProjects = CompletedProjects::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.project.completed_project.index', ['completedProjects' => $completedProjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.completed_project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompletedProjectsRequest $request)
    {
        $data = $request->validated();
        try {

            $completedProjects = new CompletedProjects();

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/projects/completed_projects/image'), $new_name);

                $image_path = "/bhairaav/projects/completed_projects/image" . $new_name;
                $completedProjects->image = $new_name;
            }

            $completedProjects->project_name = $request->project_name;
            $completedProjects->address = $request->address;
            $completedProjects->configuration = $request->configuration;
            $completedProjects->mobile_no = $request->mobile_no;
            $completedProjects->project_type = $request->project_type;
            $completedProjects->status = 2;
            $completedProjects->inserted_at = Carbon::now();
            $completedProjects->inserted_by = Auth::user()->id;
            $completedProjects->save();

            return redirect()->route('completed_projects.index')->with('message','Your record has been successfully created.');

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
        $completedProjects = CompletedProjects::findOrFail($id);
        return view('backend.project.completed_project.edit', ['completedProjects' => $completedProjects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompletedProjectsRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $completedProjects = CompletedProjects::findOrFail($id);

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/projects/completed_projects/image'), $new_name);

                $image_path = "/bhairaav/projects/completed_projects/image" . $new_name;
                $completedProjects->image = $new_name;
            }

            $completedProjects->project_name = $request->project_name;
            $completedProjects->address = $request->address;
            $completedProjects->configuration = $request->configuration;
            $completedProjects->mobile_no = $request->mobile_no;
            $completedProjects->project_type = $request->project_type;
            $completedProjects->status = 2;
            $completedProjects->modified_at = Carbon::now();
            $completedProjects->modified_by = Auth::user()->id;
            $completedProjects->save();

            return redirect()->route('completed_projects.index')->with('message','Your record has been successfully updated.');

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
            $completedProjects = CompletedProjects::findOrFail($id);
            $completedProjects->update($data);

            return redirect()->route('completed_projects.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
