<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\JourneyRequest;
use App\Models\Journey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TheJourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journeys = Journey::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.about.who_we_are.journey.index', ['journeys'=> $journeys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.who_we_are.journey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JourneyRequest $request)
    {
        $data = $request->validated();
        try {
            $journey = new Journey();

            // ==== Upload (journey_image)
            if (!empty($request->hasFile('journey_image'))) {
                $image = $request->file('journey_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/journey_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/journey_image" . $new_name;
                $journey->journey_image = $new_name;
            }

            $journey->description = $request->description;
            $journey->inserted_at = Carbon::now();
            $journey->inserted_by = Auth::user()->id;
            $journey->save();

            return redirect()->route('the_journeys.index')->with('message','Your record has been successfully created.');

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
        $journey = Journey::findOrFail($id);
        return view('backend.about.who_we_are.journey.edit', ['journey'=> $journey]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JourneyRequest $request, string $id)
    {
        $data = $request->validated();
        try {
            $journey = Journey::findOrFail($id);

            // ==== Upload (journey_image)
            if (!empty($request->hasFile('journey_image'))) {
                $image = $request->file('journey_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/journey_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/journey_image" . $new_name;
                $journey->journey_image = $new_name;
            }

            $journey->description = $request->description;
            $journey->modified_at = Carbon::now();
            $journey->modified_by = Auth::user()->id;
            $journey->save();

            return redirect()->route('the_journeys.index')->with('message','Your record has been successfully updated.');

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
            $journey = Journey::findOrFail($id);
            $journey->update($data);

            return redirect()->route('the_journeys.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
