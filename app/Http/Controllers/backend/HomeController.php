<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Admin_Home()
    {
        // === Total Projects Counts
        $total_projects = Projects::orderBy("id","desc")->whereNull('deleted_at')->count();

        // === Total Ongoing Projects Counts
        $ongoing_projects = Projects::where('project_type', 1)->orderBy("id","desc")->whereNull('deleted_at')->count();

        // === Total Completed Projects Counts
        $completed_projects = Projects::where('project_type', 2)->orderBy("id","desc")->whereNull('deleted_at')->count();

        // === Total Upcoming Projects Counts
        $upcoming_projects = Projects::where('project_type', 3)->orderBy("id","desc")->whereNull('deleted_at')->count();
        return view('backend.admin-dashboard',[
            'total_projects' => $total_projects,
            'ongoing_projects' => $ongoing_projects,
            'completed_projects' => $completed_projects,
            'upcoming_projects' => $upcoming_projects
        ]);
    }

    public function changePassword(Request $request)
    {
        return view('backend.auth.change-password');
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ],[
            'current_password.required' => 'Current Password is required',
            'password.required' => 'New Password is required',
            'password_confirmation.required' => 'Confirm Password is required',
        ]);


        #Match The Old Password
        if(!Hash::check($request->current_password, Auth::user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with("message", "Password changed successfully!");
    }
}
