<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\LeaderRequest;
use App\Models\Leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OurLeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leader = Leader::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.about.leadership.index', ['leader' => $leader]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.leadership.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LeaderRequest $request)
    {
        $data = $request->validated();
        try {

            $leader = new Leader();

            // ==== Upload (profile_image)
            if (!empty($request->hasFile('profile_image'))) {
                $image = $request->file('profile_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/leader/profile_image'), $new_name);

                $image_path = "/bhairaav/leader/profile_image" . $new_name;
                $leader->profile_image = $new_name;
            }

            $leader->name = $request->name;
            $leader->designation = $request->designation;
            $leader->description = $request->description;
            $leader->inserted_at = Carbon::now();
            $leader->inserted_by = Auth::user()->id;
            $leader->save();

            return redirect()->route('our-leader.index')->with('message','Your record has been successfully created.');

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
        $leader = Leader::findOrFail($id);
        return view('backend.about.leadership.edit', ['leader'=> $leader]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LeaderRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $leader = Leader::findOrFail($id);

            // ==== Upload (profile_image)
            if (!empty($request->hasFile('profile_image'))) {
                $image = $request->file('profile_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/leader/profile_image'), $new_name);

                $image_path = "/bhairaav/leader/profile_image" . $new_name;
                $leader->profile_image = $new_name;
            }
            
            $leader->name = $request->name;
            $leader->designation = $request->designation;
            $leader->description = $request->description;
            $leader->modified_at = Carbon::now();
            $leader->modified_by = Auth::user()->id;
            $leader->save();

            return redirect()->route('our-leader.index')->with('message','Your record has been successfully updated.');

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

            $leader = Leader::findOrFail($id);
            $leader->update($data);

            return redirect()->route('our-leader.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
