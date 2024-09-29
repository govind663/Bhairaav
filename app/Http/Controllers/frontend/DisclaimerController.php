<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Disclaimer;
use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    public function disclaimer(Request $request)
    {
        $disclaimer = Disclaimer::orderBy("id","asc")->whereNull('deleted_at')->get();
        return view('frontend.disclaimer.disclaimer', ['disclaimer' => $disclaimer]);
    }
}
