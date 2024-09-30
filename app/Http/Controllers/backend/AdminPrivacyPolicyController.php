<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PrivacyPolicyRequest;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminPrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacyPolicy = PrivacyPolicy::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.privacy_policy.index', ['privacyPolicy' => $privacyPolicy]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.privacy_policy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrivacyPolicyRequest $request)
    {
        $request->validated(); // Validation logic

        try {
            $privacyPolicy = new PrivacyPolicy();

            // Save fields as JSON-encoded arrays
            $privacyPolicy->introduction = $request->input('introduction');
            $privacyPolicy->data_collection = json_encode($request->input('data_collection', []));
            $privacyPolicy->use_of_information = json_encode($request->input('use_of_information', []));
            $privacyPolicy->closure_of_information = json_encode($request->input('closure_of_information', []));
            $privacyPolicy->data_storage = json_encode($request->input('data_storage', []));
            $privacyPolicy->cookies = $request->input('cookies');
            $privacyPolicy->rights = json_encode($request->input('rights', []));
            $privacyPolicy->changing_privacy_policy = $request->input('changing_privacy_policy');

            // Additional fields
            $privacyPolicy->inserted_at = Carbon::now();
            $privacyPolicy->inserted_by = Auth::user()->id;

            // Save to database
            $privacyPolicy->save();

            return redirect()->route('privacy_policies.index')->with('message', 'Your record has been successfully created.');

        } catch(\Exception $ex) {
            return redirect()->back()->with('error', 'Something Went Wrong - ' . $ex->getMessage());
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
        $privacyPolicy = PrivacyPolicy::findOrFail($id);

        $privacyPolicy->data_collection = json_decode($privacyPolicy->data_collection, true);
        $privacyPolicy->use_of_information = json_decode($privacyPolicy->use_of_information, true);
        $privacyPolicy->closure_of_information = json_decode($privacyPolicy->closure_of_information, true);
        $privacyPolicy->data_storage = json_decode($privacyPolicy->data_storage, true);
        $privacyPolicy->rights = json_decode($privacyPolicy->rights, true);

        return view('backend.privacy_policy.edit', ['privacyPolicy' => $privacyPolicy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrivacyPolicyRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $privacyPolicy = PrivacyPolicy::findOrFail($id);

            // Save fields as JSON-encoded arrays
            $privacyPolicy->introduction = $request->input('introduction');
            $privacyPolicy->data_collection = json_encode($request->input('data_collection', []));
            $privacyPolicy->use_of_information = json_encode($request->input('use_of_information', []));
            $privacyPolicy->closure_of_information = json_encode($request->input('closure_of_information', []));
            $privacyPolicy->data_storage = json_encode($request->input('data_storage', []));
            $privacyPolicy->cookies = $request->input('cookies');
            $privacyPolicy->rights = json_encode($request->input('rights', []));
            $privacyPolicy->changing_privacy_policy = $request->input('changing_privacy_policy');

            $privacyPolicy->inserted_at = Carbon::now();
            $privacyPolicy->inserted_by = Auth::user()->id;
            $privacyPolicy->save();

            return redirect()->route('privacy_policies.index')->with('message','Your record has been successfully created.');

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
            $privacyPolicy = PrivacyPolicy::findOrFail($id);
            $privacyPolicy->update($data);

            return redirect()->route('privacy_policies.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
