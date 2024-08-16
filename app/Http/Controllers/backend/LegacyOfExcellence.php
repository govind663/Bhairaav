<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\LegacyOfExcellenceRequest;
use App\Models\LegacyOfExcellence as ModelsLegacyOfExcellence;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LegacyOfExcellence extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $legacyOfExcellences = ModelsLegacyOfExcellence::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.legacy_of_excellence.index', ['legacyOfExcellences'=> $legacyOfExcellences]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.legacy_of_excellence.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LegacyOfExcellenceRequest $request)
    {
        $data = $request->validated();
        try {
            $legacyOfExcellence = new ModelsLegacyOfExcellence();

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/legacy-of-excellence/image'), $new_name);

                $image_path = "/bhairaav/legacy-of-excellence/image" . $new_name;
                $legacyOfExcellence->image = $new_name;
            }

            $legacyOfExcellence->title = $request->title;
            $legacyOfExcellence->description = $request->description;
            $legacyOfExcellence->inserted_at = Carbon::now();
            $legacyOfExcellence->inserted_by = Auth::user()->id;
            $legacyOfExcellence->save();

            return redirect()->route('legacy_of_excellence.index')->with('message','Your record has been successfully created.');

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
        $legacyOfExcellence = ModelsLegacyOfExcellence::findOrFail($id);
        return view('backend.legacy_of_excellence.edit', ['legacyOfExcellence'=> $legacyOfExcellence]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LegacyOfExcellenceRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $legacyOfExcellence = ModelsLegacyOfExcellence::findOrFail($id);

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/legacy-of-excellence/image'), $new_name);

                $image_path = "/bhairaav/legacy-of-excellence/image" . $new_name;
                $legacyOfExcellence->image = $new_name;
            }

            $legacyOfExcellence->title = $request->title;
            $legacyOfExcellence->description = $request->description;
            $legacyOfExcellence->modified_at = Carbon::now();
            $legacyOfExcellence->modified_by = Auth::user()->id;
            $legacyOfExcellence->save();

            return redirect()->route('legacy_of_excellence.index')->with('message','Your record has been successfully updated.');

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

            $legacyOfExcellence = ModelsLegacyOfExcellence::findOrFail($id);
            $legacyOfExcellence->update($data);

            return redirect()->route('legacy_of_excellence.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
