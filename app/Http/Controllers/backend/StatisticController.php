<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StatisticRequest;
use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistics = Statistics::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.stats.index', ['statistics'=> $statistics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.stats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StatisticRequest $request)
    {
        $data = $request->validated();
        try {

            $statistic = new Statistics();
            $statistic->name = $request->name;
            $statistic->description = $request->description;
            $statistic->inserted_at = Carbon::now();
            $statistic->inserted_by = Auth::user()->id;
            $statistic->save();

            return redirect()->route('statistics.index')->with('message','Your record has been successfully created.');

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
        $statistic = Statistics::findOrFail($id);
        return view('backend.stats.edit', ['statistic'=> $statistic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StatisticRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $statistic = Statistics::findOrFail($id);
            $statistic->name = $request->name;
            $statistic->description = $request->description;
            $statistic->modified_at = Carbon::now();
            $statistic->modified_by = Auth::user()->id;
            $statistic->save();

            return redirect()->route('statistics.index')->with('message','Your record has been successfully updated.');

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

            $statistic = Statistics::findOrFail($id);
            $statistic->update($data);

            return redirect()->route('statistics.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
