<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\OurTeamRequest;
use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OurTeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = OurTeam::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.about.our_team.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.our_team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurTeamRequest $request)
    {
        $data = $request->validated();
        try {

            $team = new OurTeam();

            // ==== Upload (profile_image)
            if (!empty($request->hasFile('profile_image'))) {
                $image = $request->file('profile_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/team_leader/profile_image'), $new_name);

                $image_path = "/bhairaav/team_leader/profile_image" . $new_name;
                $team->profile_image = $new_name;
            }

            $team->name = $request->name;
            $team->designation = $request->designation;
            $team->description = $request->description;
            $team->inserted_at = Carbon::now();
            $team->inserted_by = Auth::user()->id;
            $team->save();

            return redirect()->route('our_teams.index')->with('message','Your record has been successfully created.');

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
        $team = OurTeam::findOrFail($id);
        return view('backend.about.our_team.edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OurTeamRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $team = OurTeam::findOrFail($id);

            // ==== Upload (profile_image)
            if (!empty($request->hasFile('profile_image'))) {
                $image = $request->file('profile_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/team_leader/profile_image'), $new_name);

                $image_path = "/bhairaav/team_leader/profile_image" . $new_name;
                $team->profile_image = $new_name;
            }

            $team->name = $request->name;
            $team->designation = $request->designation;
            $team->description = $request->description;
            $team->modified_at = Carbon::now();
            $team->modified_by = Auth::user()->id;
            $team->save();

            return redirect()->route('our_teams.index')->with('message','Your record has been successfully updated.');

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
            $team = OurTeam::findOrFail($id);
            $team->update($data);

            return redirect()->route('our_teams.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
