<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeconeAnAssociateController extends Controller
{
    public function beconeAnAssociate(Request $request){
        return view("frontend.beconeAnAassociate.becone-an-associate");
    }
}
