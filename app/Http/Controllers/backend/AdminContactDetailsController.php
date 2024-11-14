<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ContactDetailsRequest;
use App\Models\ContactDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminContactDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_details = ContactDetails::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.contact_details.index', ['contact_details'=> $contact_details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contact_details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactDetailsRequest $request)
    {
        $data = $request->validated();
        try {

            $contact_details = new ContactDetails();

            $contact_details->title = $request->title;
            $contact_details->email = $request->email;
            $contact_details->phone = $request->phone;
            $contact_details->inserted_at = Carbon::now();
            $contact_details->inserted_by = Auth::user()->id;
            $contact_details->save();

            return redirect()->route('contact_details.index')->with('message','Your record has been successfully created.');

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
        $contact_details = ContactDetails::findOrFail($id);
        return view('backend.contact_details.edit', ['contact_details'=> $contact_details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactDetailsRequest $request, string $id)
    {
        $data = $request->validated();

        try {

            $contact_details = ContactDetails::findOrFail($id);

            $contact_details->title = $request->title;
            $contact_details->email = $request->email;
            $contact_details->phone = $request->phone;
            $contact_details->modified_at = Carbon::now();
            $contact_details->modified_by = Auth::user()->id;
            $contact_details->save();

            return redirect()->route('contact_details.index')->with('message','Your record has been successfully updated.');

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

            $contact_details = ContactDetails::findOrFail($id);
            $contact_details->update($data);

            return redirect()->route('contact_details.index')->with('message','Your record has been successfully deleted.');

        } catch(\Exception $ex) {

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
