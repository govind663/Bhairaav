<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProjectsRequest;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.project.all_projets.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.all_projets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectsRequest $request)
    {
        $data = $request->validated();
        try {

            $project = new Projects();

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/projects/bhairaav_projects/image'), $new_name);

                $image_path = "/bhairaav/projects/bhairaav_projects/image" . $new_name;
                $project->image = $new_name;
            }

            $project->project_name = $request->project_name;
            $project->address = $request->address;
            $project->configuration = $request->configuration;
            $project->mobile_no = $request->mobile_no;
            $project->project_type = $request->project_type;
            $project->status = $request->status;
            $project->inserted_at = Carbon::now();
            $project->inserted_by = Auth::user()->id;
            $project->save();

            return redirect()->route('projects.index', ['status' => $project->status])->with('message','Your record has been successfully created.');

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
        $project = Projects::findOrFail($id);
        return view('backend.project.all_projets.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectsRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $project = Projects::findOrFail($id);

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/projects/bhairaav_projects/image'), $new_name);

                $image_path = "/bhairaav/projects/bhairaav_projects/image" . $new_name;
                $project->image = $new_name;
            }

            $project->project_name = $request->project_name;
            $project->address = $request->address;
            $project->configuration = $request->configuration;
            $project->mobile_no = $request->mobile_no;
            $project->project_type = $request->project_type;
            $project->status = $request->status;
            $project->modified_at = Carbon::now();
            $project->modified_by = Auth::user()->id;
            $project->save();

            return redirect()->route('projects.index', ['status' => $project->status])->with('message','Your record has been successfully updated.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $data['deleted_by'] =  Auth::user()->id;
        $data['deleted_at'] =  Carbon::now();
        try {
            $project = Projects::findOrFail($id);
            $project->status = $request->status;
            $project->update($data);

            return redirect()->route('projects.index', ['status' => $project->status])->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }

    public function projectList(Request $request, $status){

        $projects = Projects::where('status', $status)->orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.project.all_projets.index', ['projects' => $projects, 'status' => $status]);
    }
}
