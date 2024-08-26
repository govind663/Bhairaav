<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BackingPartnerRequest;
use App\Models\BackingPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BackingPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $backingPartners = BackingPartner::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.about.associates.our_bank_partners.index', ['backingPartners'=> $backingPartners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.associates.our_bank_partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BackingPartnerRequest $request)
    {
        $data = $request->validated();
        try {
            $backingPartner = new BackingPartner();

            // ==== Upload (bank_logo)
            if (!empty($request->hasFile('bank_logo'))) {
                $image = $request->file('bank_logo');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/bank_partner/bank_logo'), $new_name);

                $image_path = "/bhairaav/bank_partner/bank_logo" . $new_name;
                $backingPartner->bank_logo = $new_name;
            }

            $backingPartner->inserted_at = Carbon::now();
            $backingPartner->inserted_by = Auth::user()->id;
            $backingPartner->save();

            return redirect()->route('banking_partners.index')->with('message','Your record has been successfully created.');

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
        $backingPartner = BackingPartner::findOrFail($id);
        return view('backend.about.associates.our_bank_partners.edit', ['backingPartner'=>$backingPartner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BackingPartnerRequest $request, string $id)
    {
        $data = $request->validated();
        try {
            $backingPartner = BackingPartner::findOrFail($id);

            // ==== Upload (bank_logo)
            if (!empty($request->hasFile('bank_logo'))) {
                $image = $request->file('bank_logo');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/bank_partner/bank_logo'), $new_name);

                $image_path = "/bhairaav/bank_partner/bank_logo" . $new_name;
                $backingPartner->bank_logo = $new_name;
            }

            $backingPartner->modified_at = Carbon::now();
            $backingPartner->modified_by = Auth::user()->id;
            $backingPartner->save();

            return redirect()->route('banking_partners.index')->with('message','Your record has been successfully updated.');

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
            $backingPartner = BackingPartner::findOrFail($id);
            $backingPartner->update($data);

            return redirect()->route('banking_partners.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
