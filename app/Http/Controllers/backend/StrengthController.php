<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Strength;
use App\Http\Requests\Backend\StrengthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class StrengthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $strengths = Strength::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.about.who_we_are.strength.index', ['strengths' => $strengths]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.who_we_are.strength.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StrengthRequest $request)
    {
        $data = $request->validated();
        try {

            $strength = new Strength();

            // ==== Upload (icon_image)
            if (!empty($request->hasFile('icon_image'))) {
                $image = $request->file('icon_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/icon_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/icon_image" . $new_name;
                $strength->icon_image = $new_name;
            }

            $strength->title = $request->title;
            $strength->icon_name = $request->icon_name;
            $strength->other_description = json_encode($request->other_description);
            $strength->inserted_at = Carbon::now();
            $strength->inserted_by = Auth::user()->id;
            $strength->save();

            return redirect()->route('strengths.index')->with('message','Your record has been successfully created.');

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
        $strength = Strength::findOrFail($id);
        return view('backend.about.who_we_are.strength.edit', ['strength' => $strength]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StrengthRequest $request, string $id)
    {
        $data = $request->validated();
        try {
            $strength = Strength::findOrFail($id);

            // ==== Upload (icon_image)
            if (!empty($request->hasFile('icon_image'))) {
                $image = $request->file('icon_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/icon_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/icon_image" . $new_name;
                $strength->icon_image = $new_name;
            }

            $strength->title = $request->title;
            $strength->icon_name = $request->icon_name;
            $strength->other_description = json_encode($request->other_description);
            $strength->modified_at = Carbon::now();
            $strength->modified_by = Auth::user()->id;
            $strength->save();

            return redirect()->route('strengths.index')->with('message','Your record has been successfully updated.');

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
            $strength = Strength::findOrFail($id);
            $strength->update($data);

            return redirect()->route('strengths.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
