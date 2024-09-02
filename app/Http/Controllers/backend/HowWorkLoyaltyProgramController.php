<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\HowWorkLoyaltyProgramRequest;
use App\Models\HowWorkLoyaltyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HowWorkLoyaltyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $howWorkLoyaltyPrograms = HowWorkLoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.refer_friend.how_work_loyalty_program.index', ['howWorkLoyaltyPrograms'=> $howWorkLoyaltyPrograms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.refer_friend.how_work_loyalty_program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HowWorkLoyaltyProgramRequest $request)
    {
        $data = $request->validated();
        try {

            $howWorkLoyaltyProgram = new HowWorkLoyaltyProgram();

            $howWorkLoyaltyProgram->description = $request->description;
            $howWorkLoyaltyProgram->inserted_at = Carbon::now();
            $howWorkLoyaltyProgram->inserted_by = Auth::user()->id;
            $howWorkLoyaltyProgram->save();

            return redirect()->route('how_work_loyalty_programs.index')->with('message','Your record has been successfully created.');

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
        $howWorkLoyaltyProgram = HowWorkLoyaltyProgram::findOrFail($id);
        return view('backend.refer_friend.how_work_loyalty_program.edit', ['howWorkLoyaltyProgram'=>$howWorkLoyaltyProgram]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HowWorkLoyaltyProgramRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $howWorkLoyaltyProgram = HowWorkLoyaltyProgram::findOrFail($id);

            $howWorkLoyaltyProgram->description = $request->description;
            $howWorkLoyaltyProgram->modified_at = Carbon::now();
            $howWorkLoyaltyProgram->modified_by = Auth::user()->id;
            $howWorkLoyaltyProgram->save();

            return redirect()->route('how_work_loyalty_programs.index')->with('message','Your record has been successfully updated.');

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
            $howWorkLoyaltyProgram = HowWorkLoyaltyProgram::findOrFail($id);
            $howWorkLoyaltyProgram->update($data);

            return redirect()->route('how_work_loyalty_programs.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
