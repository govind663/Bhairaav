<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.testimonial.index', ['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request)
    {
        $data = $request->validated();
        try {
            $testimonial = new Testimonial();

            // ==== Upload (profile_image)
            if (!empty($request->hasFile('profile_image'))) {
                $image = $request->file('profile_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/testimonial/profile_image'), $new_name);

                $image_path = "/bhairaav/testimonial/profile_image" . $new_name;
                $testimonial->profile_image = $new_name;
            }

            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            $testimonial->star_count = $request->star_count;
            $testimonial->inserted_at = Carbon::now();
            $testimonial->inserted_by = Auth::user()->id;
            $testimonial->save();

            return redirect()->route('testimonials.index')->with('message','Your record has been successfully created.');

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
        $testimonial = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit', ['testimonial'=> $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $testimonial = Testimonial::findOrFail($id);

            // ==== Upload (profile_image)
            if (!empty($request->hasFile('profile_image'))) {
                $image = $request->file('profile_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/testimonial/profile_image'), $new_name);

                $image_path = "/bhairaav/testimonial/profile_image" . $new_name;
                $testimonial->profile_image = $new_name;
            }

            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            $testimonial->star_count = $request->star_count;
            $testimonial->modified_at = Carbon::now();
            $testimonial->modified_by = Auth::user()->id;
            $testimonial->save();

            return redirect()->route('testimonials.index')->with('message','Your record has been successfully updated.');

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

            $whyChooseBhairaav = Testimonial::findOrFail($id);
            $whyChooseBhairaav->update($data);

            return redirect()->route('testimonials.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
