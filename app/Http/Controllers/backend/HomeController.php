<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('backend.admin-dashboard');
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
            if(!Hash::check($request->current_password, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }


            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->password)
            ]);

            return back()->with("message", "Password changed successfully!");
    }
}
