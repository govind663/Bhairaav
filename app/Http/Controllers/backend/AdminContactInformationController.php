<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ContactInformationRequest;
use App\Models\ContactInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminContactInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_information = ContactInformation::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.contact_information.index', ['contact_information'=> $contact_information]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contact_information.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactInformationRequest $request)
    {
        $data = $request->validated();
        try {

            $contact_information = new ContactInformation();

            $contact_information->location = $request->location;
            $contact_information->location_map_link = $request->location_map_link;
            $contact_information->phone = $request->phone;
            $contact_information->inserted_at = Carbon::now();
            $contact_information->inserted_by = Auth::user()->id;
            $contact_information->save();

            return redirect()->route('contact_information.index')->with('message','Your record has been successfully created.');

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
        $contact_information = ContactInformation::findOrFail($id);
        return view('backend.contact_information.edit', ['contact_information'=> $contact_information]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactInformationRequest $request, string $id)
    {
        $data = $request->validated();

        try {

            $contact_information = ContactInformation::findOrFail($id);

            $contact_information->location = $request->location;
            $contact_information->location_map_link = $request->location_map_link;
            $contact_information->phone = $request->phone;
            $contact_information->modified_at = Carbon::now();
            $contact_information->modified_by = Auth::user()->id;
            $contact_information->save();

            return redirect()->route('contact_information.index')->with('message','Your record has been successfully updated.');

        } catch(\Exception $ex) {

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

            $contact_information = ContactInformation::findOrFail($id);
            $contact_information->update($data);

            return redirect()->route('contact_information.index')->with('message','Your record has been successfully deleted.');

        } catch(\Exception $ex) {

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
