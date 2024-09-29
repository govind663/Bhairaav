<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\DisclaimerRequest;
use App\Models\Disclaimer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminDisclaimerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disclaimer = Disclaimer::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.disclaimer.index', ['disclaimer' => $disclaimer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.disclaimer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DisclaimerRequest $request)
    {
        $data = $request->validated();
        try {

            $disclaimer = new Disclaimer();

            $disclaimer->description = $data['description'];
            $disclaimer->inserted_at = Carbon::now();
            $disclaimer->inserted_by = Auth::user()->id;
            $disclaimer->save();

            return redirect()->route('disclaimers.index')->with('message','Your record has been successfully created.');

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
        $disclaimer = Disclaimer::findOrFail($id);
        return view('backend.disclaimer.edit', ['disclaimer' => $disclaimer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DisclaimerRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $disclaimer = Disclaimer::findOrFail($id);

            $disclaimer->description = $data['description'];
            $disclaimer->inserted_at = Carbon::now();
            $disclaimer->inserted_by = Auth::user()->id;
            $disclaimer->save();

            return redirect()->route('disclaimers.index')->with('message','Your record has been successfully created.');

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
            $disclaimer = Disclaimer::findOrFail($id);
            $disclaimer->update($data);

            return redirect()->route('disclaimers.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
