<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\OurLogo;
use App\Http\Requests\Backend\OurLogoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OurLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourLogos = OurLogo::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.about.who_we_are.our_logo.index', ['ourLogos'=> $ourLogos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.who_we_are.our_logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurLogoRequest $request)
    {
        $data = $request->validated();
        try {
            $ourLogo = new OurLogo();

            $ourLogo->description = $request->description;
            $ourLogo->inserted_at = Carbon::now();
            $ourLogo->inserted_by = Auth::user()->id;
            $ourLogo->save();

            return redirect()->route('our_logos.index')->with('message','Your record has been successfully created.');

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
        $ourLogo = OurLogo::findOrFail($id);
        return view('backend.about.who_we_are.our_logo.edit', ['ourLogo'=>$ourLogo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OurLogoRequest $request, string $id)
    {
        $data = $request->validated();
        try {
            $ourLogo = OurLogo::findOrFail($id);

            $ourLogo->description = $request->description;
            $ourLogo->modified_at = Carbon::now();
            $ourLogo->modified_by = Auth::user()->id;
            $ourLogo->save();

            return redirect()->route('our_logos.index')->with('message','Your record has been successfully updated.');

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
            $ourLogo = OurLogo::findOrFail($id);
            $ourLogo->update($data);

            return redirect()->route('our_logos.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
