<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Legacy;
use App\Http\Requests\Backend\LegacyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LegacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $legacies = Legacy::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.about.who_we_are.legacy.index', ['legacies'=> $legacies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.who_we_are.legacy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LegacyRequest $request)
    {
        $data = $request->validated();
        try {
            $legacy = new Legacy();

            // ==== Upload (legacies_image)
            if (!empty($request->hasFile('legacies_image'))) {
                $image = $request->file('legacies_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/legacies_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/legacies_image" . $new_name;
                $legacy->legacies_image = $new_name;
            }

            $legacy->description = $request->description;
            $legacy->inserted_at = Carbon::now();
            $legacy->inserted_by = Auth::user()->id;
            $legacy->save();

            return redirect()->route('the_legacy.index')->with('message','Your record has been successfully created.');

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
        $legacy = Legacy::findOrFail($id);
        return view('backend.about.who_we_are.legacy.edit', ['legacy'=> $legacy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LegacyRequest $request, string $id)
    {
        $data = $request->validated();
        try {
            $legacy = Legacy::findOrFail($id);

            // ==== Upload (legacies_image)
            if (!empty($request->hasFile('legacies_image'))) {
                $image = $request->file('legacies_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/legacies_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/legacies_image" . $new_name;
                $legacy->legacies_image = $new_name;
            }

            $legacy->description = $request->description;
            $legacy->modified_at = Carbon::now();
            $legacy->modified_by = Auth::user()->id;
            $legacy->save();

            return redirect()->route('the_legacy.index')->with('message','Your record has been successfully updated.');

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
            $legacy = Legacy::findOrFail($id);
            $legacy->update($data);

            return redirect()->route('the_legacy.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
