<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\LoyaltyProgram;
use Illuminate\Http\Request;
use App\Models\ReferLoyaltyProgram;

class ChannelReferController extends Controller
{
    public function chanelRefer(Request $request){

        $loyalityProgram = LoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->first();
        $refer = ReferLoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->first();
        return view("frontend.beconeAnAassociate.chanel-refer",[
            'loyalityProgram' => $loyalityProgram,
            'refer' => $refer
        ]);
    }
}
