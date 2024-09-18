<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ChanelRequest;
use App\Models\Chanel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ChanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chanel = Chanel::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.chanels.index', ['chanel' => $chanel]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.chanels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChanelRequest $request)
    {
        $data = $request->validated();
        try {

            $chanel = new Chanel();

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/chanel/image'), $new_name);

                $image_path = "/bhairaav/chanel/image" . $new_name;
                $chanel->image = $new_name;
            }

            $chanel->name = $request->name;
            $chanel->description = $request->description;
            $chanel->status = $request->status;
            $chanel->inserted_at = Carbon::now();
            $chanel->inserted_by = Auth::user()->id;
            $chanel->save();

            return redirect()->route('chanel_name.index')->with('message','Your record has been successfully created.');

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
        $chanel = Chanel::findOrFail($id);
        return view('backend.chanels.edit', ['chanel' => $chanel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChanelRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $chanel = Chanel::findOrFail($id);

            // ==== Upload (image)
            if (!empty($request->hasFile('image'))) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/chanel/image'), $new_name);

                $image_path = "/bhairaav/chanel/image" . $new_name;
                $chanel->image = $new_name;
            }

            $chanel->name = $request->name;
            $chanel->description = $request->description;
            $chanel->status = $request->status;
            $chanel->modified_at = Carbon::now();
            $chanel->modified_by = Auth::user()->id;
            $chanel->save();

            return redirect()->route('chanel_name.index')->with('message','Your record has been successfully updated.');

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

            $chanel = Chanel::findOrFail($id);
            $chanel->update($data);

            return redirect()->route('chanel_name.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
