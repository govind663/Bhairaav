<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.about.associates.partner.index', ['partners'=> $partners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.associates.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerRequest $request)
    {
        $data = $request->validated();
        try {

            $partner = new Partner();

            $partner->name = $request->name;
            $partner->partner_name = json_encode($request->partner_name);
            $partner->inserted_at = Carbon::now();
            $partner->inserted_by = Auth::user()->id;
            $partner->save();

            return redirect()->route('partners.index')->with('message','Your record has been successfully created.');

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
        $partner = Partner::findOrFail($id);
        return view('backend.about.associates.partner.edit', ['partner'=>$partner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $partner = Partner::findOrFail($id);

            $partner->name = $request->name;
            $partner->partner_name = json_encode($request->partner_name);
            $partner->modified_at = Carbon::now();
            $partner->modified_by = Auth::user()->id;
            $partner->save();

            return redirect()->route('partners.index')->with('message','Your record has been successfully updated.');

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

            $partner = Partner::findOrFail($id);
            $partner->update($data);

            return redirect()->route('partners.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
