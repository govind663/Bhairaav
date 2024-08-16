<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\MediaRequest;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Media::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.gallery.index', ['medias'=>$medias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MediaRequest $request)
    {
        $data = $request->validated();
        try {
            $media = new Media();

            // ==== Upload (media_image)
            if (!empty($request->hasFile('media_image'))) {
                $image = $request->file('media_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/media/media_image'), $new_name);

                $image_path = "/bhairaav/media/media_image" . $new_name;
                $media->media_image = $new_name;
            }

            $media->media_name = $request->media_name;
            $media->media_dec = $request->media_dec;
            $media->inserted_at = Carbon::now();
            $media->inserted_by = Auth::user()->id;
            $media->save();

            return redirect()->route('gallery.index')->with('message','Your record has been successfully created.');

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
        $media = Media::findOrFail($id);
        return view('backend.gallery.edit', ['media'=>$media]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MediaRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $media = Media::findOrFail($id);

            // ==== Upload (media_image)
            if (!empty($request->hasFile('media_image'))) {
                $image = $request->file('media_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/media/media_image'), $new_name);

                $image_path = "/bhairaav/media/media_image" . $new_name;
                $media->media_image = $new_name;
            }

            $media->media_name = $request->media_name;
            $media->media_dec = $request->media_dec;
            $media->modified_at = Carbon::now();
            $media->modified_by = Auth::user()->id;
            $media->save();

            return redirect()->route('gallery.index')->with('message','Your record has been successfully updated.');

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

            $media = Media::findOrFail($id);
            $media->update($data);

            return redirect()->route('gallery.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
