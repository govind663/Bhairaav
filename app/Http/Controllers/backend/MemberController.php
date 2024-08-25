<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Http\Requests\Backend\MemberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.about.who_we_are.member.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.who_we_are.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberRequest $request)
    {
        $data = $request->validated();
        try {
            $member = new Member();

            // ==== Upload (members_image)
            if (!empty($request->hasFile('members_image'))) {
                $image = $request->file('members_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/members_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/members_image" . $new_name;
                $member->members_image = $new_name;
            }

            $member->inserted_at = Carbon::now();
            $member->inserted_by = Auth::user()->id;
            $member->save();

            return redirect()->route('members.index')->with('message','Your record has been successfully created.');

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
        $member = Member::findOrFail($id);
        return view('backend.about.who_we_are.member.edit', ['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberRequest $request, string $id)
    {
        $data = $request->validated();
        try {
            $member = Member::findOrFail($id);

            // ==== Upload (members_image)
            if (!empty($request->hasFile('members_image'))) {
                $image = $request->file('members_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/who_we_are/members_image'), $new_name);

                $image_path = "/bhairaav/who_we_are/members_image" . $new_name;
                $member->members_image = $new_name;
            }
            $member->modified_at = Carbon::now();
            $member->modified_by = Auth::user()->id;
            $member->save();

            return redirect()->route('members.index')->with('message','Your record has been successfully updated.');

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
            $member = Member::findOrFail($id);
            $member->update($data);

            return redirect()->route('members.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
