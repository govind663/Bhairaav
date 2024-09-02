<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ReInvestmentLoyaltyProgramRequest;
use App\Models\ReInvestmentLoyaltyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReInvestmentLoyaltyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $re_investment_loyalty_programs = ReInvestmentLoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.refer_friend.re_investment_loyalty_program.index', ['re_investment_loyalty_programs'=> $re_investment_loyalty_programs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.refer_friend.re_investment_loyalty_program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReInvestmentLoyaltyProgramRequest $request)
    {
        $data = $request->validated();
        try {

            $reInvestmentLoyaltyProgram = new ReInvestmentLoyaltyProgram();

            $reInvestmentLoyaltyProgram->description = $request->description;
            $reInvestmentLoyaltyProgram->inserted_at = Carbon::now();
            $reInvestmentLoyaltyProgram->inserted_by = Auth::user()->id;
            $reInvestmentLoyaltyProgram->save();

            return redirect()->route('re_investment_loyalty_programs.index')->with('message','Your record has been successfully created.');

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
        $re_investment_loyalty_program = ReInvestmentLoyaltyProgram::findOrFail($id);

        return view('backend.refer_friend.re_investment_loyalty_program.edit', ['re_investment_loyalty_program'=>$re_investment_loyalty_program]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReInvestmentLoyaltyProgramRequest $request, string $id)
    {
        $data = $request->validated();

        try {

            $re_investment_loyalty_program = ReInvestmentLoyaltyProgram::findOrFail($id);

            $re_investment_loyalty_program->description = $request->description;
            $re_investment_loyalty_program->modified_at = Carbon::now();
            $re_investment_loyalty_program->modified_by = Auth::user()->id;
            $re_investment_loyalty_program->save();

            return redirect()->route('re_investment_loyalty_programs.index')->with('message','Your record has been successfully updated.');

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
            $re_investment_loyalty_program = ReInvestmentLoyaltyProgram::findOrFail($id);
            $re_investment_loyalty_program->update($data);

            return redirect()->route('re_investment_loyalty_programs.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
