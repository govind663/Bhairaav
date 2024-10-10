<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CareerRequest;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminCareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.career.index', ['careers'=> $careers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.career.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CareerRequest $request)
    {
        $data = $request->validated();
        try {

            $career = new Career();

            // ==== Upload (career_image)
            if (!empty($request->hasFile('career_image'))) {
                $image = $request->file('career_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/Career/career_image'), $new_name);

                $image_path = "/bhairaav/Career/career_image" . $new_name;
                $career->career_image = $new_name;
            }

            $career->career_title = $request->career_title;
            $career->career_description = $request->career_description;
            $career->job_title = json_encode($request->job_title);
            $career->job_description = json_encode($request->job_description);
            $career->inserted_at = Carbon::now();
            $career->inserted_by = Auth::user()->id;
            $career->save();

            return redirect()->route('careers.index')->with('message','Your record has been successfully created.');

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
        $career = Career::findOrFail($id);
        $jobTitles = json_decode($career->job_title, true);
        $jobDescriptions = json_decode($career->job_description, true);

        return view('backend.career.edit', [
            'career'=> $career,
            'jobTitles'=> $jobTitles,
            'jobDescriptions'=> $jobDescriptions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CareerRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $career = Career::findOrFail($id);

            // ==== Upload (career_image)
            if (!empty($request->hasFile('career_image'))) {
                $image = $request->file('career_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/Career/career_image'), $new_name);

                $image_path = "/bhairaav/Career/career_image" . $new_name;
                $career->career_image = $new_name;
            }

            $career->career_title = $request->career_title;
            $career->career_description = $request->career_description;
            $career->job_title = json_encode($request->job_title);
            $career->job_description = json_encode($request->job_description);
            $career->modified_at = Carbon::now();
            $career->modified_by = Auth::user()->id;
            $career->save();

            return redirect()->route('careers.index')->with('message','Your record has been successfully updated.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
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

            $career = Career::findOrFail($id);
            $career->update($data);

            return redirect()->route('careers.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
