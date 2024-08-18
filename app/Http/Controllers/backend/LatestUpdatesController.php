<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\LatestUpdateRequest;
use App\Models\LatestUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LatestUpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestUpdates = LatestUpdate::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.latest_updates.index', ['latestUpdates'=> $latestUpdates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.latest_updates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LatestUpdateRequest $request)
    {
        $data = $request->validated();
        try {
            $latestUpdate = new LatestUpdate();

            // ==== Upload (media_image)
            if (!empty($request->hasFile('media_image'))) {
                $image = $request->file('media_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/latest_updates/media_image'), $new_name);

                $image_path = "/bhairaav/latest_updates/media_image" . $new_name;
                $latestUpdate->media_image = $new_name;
            }

            $latestUpdate->name = $request->name;
            $latestUpdate->inserted_at = Carbon::now();
            $latestUpdate->inserted_by = Auth::user()->id;
            $latestUpdate->save();

            return redirect()->route('latest_update.index')->with('message','Your record has been successfully created.');

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
        $latestUpdate = LatestUpdate::findOrFail($id);
        return view('backend.latest_updates.edit', ['latestUpdate'=> $latestUpdate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LatestUpdateRequest $request, string $id)
    {
        $data = $request->validated();
        try {
            $latestUpdate = LatestUpdate::findOrFail($id);
            // ==== Upload (media_image)
            if (!empty($request->hasFile('media_image'))) {
                $image = $request->file('media_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/latest_updates/media_image'), $new_name);

                $image_path = "/bhairaav/latest_updates/media_image" . $new_name;
                $latestUpdate->media_image = $new_name;
            }

            $latestUpdate->name = $request->name;
            $latestUpdate->modified_at = Carbon::now();
            $latestUpdate->modified_by = Auth::user()->id;
            $latestUpdate->save();

            return redirect()->route('latest_update.index')->with('message','Your record has been successfully updated.');

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
            $latestUpdate = LatestUpdate::findOrFail($id);
            $latestUpdate->update($data);

            return redirect()->route('latest_update.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
