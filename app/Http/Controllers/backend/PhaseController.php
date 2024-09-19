<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PhaseRequest;
use App\Models\Phase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phases = Phase::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.project.phases.index', ['phases' => $phases]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.project.phases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhaseRequest $request)
    {
        $data = $request->validated();
        try {

            $phase = new Phase();
            $phase->name = $request->name;
            $phase->inserted_at = Carbon::now();
            $phase->inserted_by = Auth::user()->id;
            $phase->save();

            return redirect()->route('multiple_phase.index')->with('message','Your record has been successfully created.');

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
        $phase = Phase::findOrFail($id);
        return view('backend.project.phases.edit', ['phase'=>$phase]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PhaseRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $phase = Phase::findOrFail($id);
            $phase->name = $request->name;
            $phase->modified_at = Carbon::now();
            $phase->modified_by = Auth::user()->id;
            $phase->save();

            return redirect()->route('multiple_phase.index')->with('message','Your record has been successfully updated.');

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

            $phase = Phase::findOrFail($id);
            $phase->update($data);

            return redirect()->route('multiple_phase.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
