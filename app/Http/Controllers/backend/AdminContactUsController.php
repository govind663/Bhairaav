<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{

    public function contactUs(Request $request){

        $contactus = ContactUs::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.contact_us.index', ['contactus'=> $contactus]);
    }
}
