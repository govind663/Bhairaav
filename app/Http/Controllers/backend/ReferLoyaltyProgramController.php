<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ReferLoyaltyProgramRequest;
use App\Models\ReferLoyaltyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReferLoyaltyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $refer = ReferLoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.refer_friend.refer_loyalty_programs.index', ['refer' => $refer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.refer_friend.refer_loyalty_programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReferLoyaltyProgramRequest $request)
    {
        $data = $request->validated();
        try {

            $refer = new ReferLoyaltyProgram();

            $refer->description = $request->description;
            $refer->inserted_at = Carbon::now();
            $refer->inserted_by = Auth::user()->id;
            $refer->save();

            return redirect()->route('refer_loyalty_programs.index')->with('message','Your record has been successfully created.');

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
        $refer = ReferLoyaltyProgram::findOrFail($id);
        return view('backend.refer_friend.refer_loyalty_programs.edit', ['refer' => $refer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReferLoyaltyProgramRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $refer = ReferLoyaltyProgram::findOrFail($id);

            $refer->description = $request->description;
            $refer->modified_at = Carbon::now();
            $refer->modified_by = Auth::user()->id;
            $refer->save();

            return redirect()->route('refer_loyalty_programs.index')->with('message','Your record has been successfully updated.');

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
            $refer = ReferLoyaltyProgram::findOrFail($id);
            $refer->update($data);

            return redirect()->route('how_work_loyalty_programs.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
