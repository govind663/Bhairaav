<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function career(Request $request)
    {
        return view('frontend.careers.career');
    }
}
