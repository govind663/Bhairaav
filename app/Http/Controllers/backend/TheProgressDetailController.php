<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\TheProgressDetail;
use App\Http\Requests\Backend\TheProgressDetailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TheProgressDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progressDetails = TheProgressDetail::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.about.who_we_are.progress_detail.index', ['progressDetails'=> $progressDetails]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.who_we_are.progress_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TheProgressDetailRequest $request)
    {
        $data = $request->validated();
        try {
            $progressDetail = new TheProgressDetail();

            // ==== Upload (progress_image)
            if (!empty($request->hasFile('progress_image'))) {
                $image = $request->file('progress_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/progress_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/progress_image" . $new_name;
                $progressDetail->progress_image = $new_name;
            }

            $progressDetail->description = $request->description;
            $progressDetail->inserted_at = Carbon::now();
            $progressDetail->inserted_by = Auth::user()->id;
            $progressDetail->save();

            return redirect()->route('the_progress.index')->with('message','Your record has been successfully created.');

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
        $progressDetail = TheProgressDetail::findOrFail($id);
        return view('backend.about.who_we_are.progress_detail.edit', ['progressDetail'=> $progressDetail]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TheProgressDetailRequest $request, string $id)
    {
        $data = $request->validated();
        try {
            $progressDetail = TheProgressDetail::findOrFail($id);

            // ==== Upload (progress_image)
            if (!empty($request->hasFile('progress_image'))) {
                $image = $request->file('progress_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/progress_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/progress_image" . $new_name;
                $progressDetail->progress_image = $new_name;
            }

            $progressDetail->description = $request->description;
            $progressDetail->inserted_at = Carbon::now();
            $progressDetail->modified_at = Carbon::now();
            $progressDetail->modified_by = Auth::user()->id;
            $progressDetail->save();

            return redirect()->route('the_progress.index')->with('message','Your record has been successfully updated.');

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
            $progressDetail = TheProgressDetail::findOrFail($id);
            $progressDetail->update($data);

            return redirect()->route('the_progress.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
