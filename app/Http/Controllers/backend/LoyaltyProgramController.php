<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\LoyalityProgramRequest;
use App\Models\LoyaltyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LoyaltyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loyalityProgram = LoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.refer_friend.loyalty_program.index', ['loyalityProgram'=> $loyalityProgram]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.refer_friend.loyalty_program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoyalityProgramRequest $request)
    {
        $data = $request->validated();
        try
        {

            $loyalityProgram = new LoyaltyProgram();

            $loyalityProgram->title = $request->title;
            $loyalityProgram->description = $request->description;
            $loyalityProgram->inserted_at = Carbon::now();
            $loyalityProgram->inserted_by = Auth::user()->id;
            $loyalityProgram->save();

            return redirect()->route('loyalty_programs.index')->with('message','Your record has been successfully created.');

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
        $loyalityProgram = LoyaltyProgram::findOrFail($id);
        return view('backend.refer_friend.loyalty_program.edit', ['loyalityProgram'=> $loyalityProgram]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LoyalityProgramRequest $request, string $id)
    {
        $data = $request->validated();
        try
        {
            $loyalityProgram = LoyaltyProgram::findOrFail($id);

            $loyalityProgram->title = $request->title;
            $loyalityProgram->description = $request->description;
            $loyalityProgram->modified_at = Carbon::now();
            $loyalityProgram->modified_by = Auth::user()->id;
            $loyalityProgram->save();

            return redirect()->route('loyalty_programs.index')->with('message','Your record has been successfully updated.');

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
            $loyalityProgram = LoyaltyProgram::findOrFail($id);
            $loyalityProgram->update($data);

            return redirect()->route('loyalty_programs.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
