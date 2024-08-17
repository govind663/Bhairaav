<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\WhyChooseBhairaavRequest;
use App\Models\WhyChooseBhairaav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WhyChooseBhairaavController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whyChooseBhairaavs = WhyChooseBhairaav::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.why_choose_bhairaav.index', ['whyChooseBhairaavs'=> $whyChooseBhairaavs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.why_choose_bhairaav.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhyChooseBhairaavRequest $request)
    {
        $data = $request->validated();
        try {

            $whyChooseBhairaav = new WhyChooseBhairaav();

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/why_choose_bhiraav/image'), $new_name);

                $image_path = "/bhairaav/why_choose_bhiraav/image" . $new_name;
                $whyChooseBhairaav->image = $new_name;
            }

            $whyChooseBhairaav->title = $request->title;
            $whyChooseBhairaav->description = $request->description;
            $whyChooseBhairaav->inserted_at = Carbon::now();
            $whyChooseBhairaav->inserted_by = Auth::user()->id;
            $whyChooseBhairaav->save();

            return redirect()->route('why_choose_bhiraavs.index')->with('message','Your record has been successfully created.');

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
        $whyChooseBhairaav = WhyChooseBhairaav::findOrFail($id);
        return view('backend.why_choose_bhairaav.edit', ['whyChooseBhairaav'=> $whyChooseBhairaav]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WhyChooseBhairaavRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $whyChooseBhairaav = WhyChooseBhairaav::findOrFail($id);

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/why_choose_bhiraav/image'), $new_name);

                $image_path = "/bhairaav/why_choose_bhiraav/image" . $new_name;
                $whyChooseBhairaav->image = $new_name;
            }

            $whyChooseBhairaav->title = $request->title;
            $whyChooseBhairaav->description = $request->description;
            $whyChooseBhairaav->modified_at = Carbon::now();
            $whyChooseBhairaav->modified_by = Auth::user()->id;
            $whyChooseBhairaav->save();

            return redirect()->route('why_choose_bhiraavs.index')->with('message','Your record has been successfully updated.');

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

            $whyChooseBhairaav = WhyChooseBhairaav::findOrFail($id);
            $whyChooseBhairaav->update($data);

            return redirect()->route('why_choose_bhiraavs.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
