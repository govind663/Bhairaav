<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\LocationAdvantageRequest;
use App\Models\LocationAdvantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LocationAdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locationAdvantages = LocationAdvantage::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.project.location_advantages.index', ['locationAdvantages'=> $locationAdvantages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.location_advantages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocationAdvantageRequest $request)
    {
        $data = $request->validated();
        try {
            $locationAdvantages = new LocationAdvantage();

            $locationAdvantages->feature_name = $request->feature_name;
            $locationAdvantages->inserted_at = Carbon::now();
            $locationAdvantages->inserted_by = Auth::user()->id;
            $locationAdvantages->save();

            return redirect()->route('location-advantage.index')->with('message','Your record has been successfully created.');

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
        $locationAdvantages = LocationAdvantage::findOrFail($id);
        // dd($locationAdvantages);
        return view('backend.project.location_advantages.edit', ['locationAdvantages'=> $locationAdvantages]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LocationAdvantageRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $locationAdvantages = LocationAdvantage::findOrFail($id);

            $locationAdvantages->feature_name = $request->feature_name;
            $locationAdvantages->modified_at = Carbon::now();
            $locationAdvantages->modified_by = Auth::user()->id;
            $locationAdvantages->save();

            return redirect()->route('location-advantage.index')->with('message','Your record has been successfully updated.');

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

            $locationAdvantages = LocationAdvantage::findOrFail($id);
            $locationAdvantages->update($data);

            return redirect()->route('location-advantage.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
