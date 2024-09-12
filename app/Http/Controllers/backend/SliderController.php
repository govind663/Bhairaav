<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.banner.index', ['sliders'=> $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $data = $request->validated();
        try {
            $slider = Slider::create($data);

            // ==== Upload (banner_imag)
            if (!empty($request->hasFile('banner_imag'))) {
                $image = $request->file('banner_imag');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/slider/banner_imag'), $new_name);

                $image_path = "/bhairaav/slider/banner_imag" . $new_name;
                $slider->banner_imag = $new_name;
            }

            $slider->title = $data['title'];
            $slider->subtitle = $data['subtitle'];
            $slider->status = $data['status'];
            $slider->inserted_at = Carbon::now();
            $slider->inserted_by = Auth::user()->id;
            $slider->save();

            return redirect()->route('sliders.index')->with('message','Your record has been successfully created.');

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
        $slider = Slider::findOrFail($id);
        return view('backend.banner.edit', [
            'slider'=> $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $slider = Slider::findOrFail($id);

            // ==== Upload (banner_imag)
            if (!empty($request->hasFile('banner_imag'))) {
                $image = $request->file('banner_imag');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/slider/banner_imag'), $new_name);

                $image_path = "/bhairaav/slider/banner_imag" . $new_name;
                $slider->banner_imag = $new_name;
            }

            $slider->title = $data['title'];
            $slider->subtitle = $data['subtitle'];
            $slider->status = $data['status'];
            $slider->modified_at = Carbon::now();
            $slider->modified_by = Auth::user()->id;
            $slider->save();

            return redirect()->route('sliders.index')->with('message','Your record has been successfully updated.');

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

            $slider = Slider::findOrFail($id);
            $slider->update($data);

            return redirect()->route('sliders.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
