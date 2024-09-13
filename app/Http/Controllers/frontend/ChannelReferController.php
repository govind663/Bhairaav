<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\HowWorkLoyaltyProgram;
use App\Models\LoyaltyProgram;
use Illuminate\Http\Request;
use App\Models\ReferLoyaltyProgram;
use App\Models\ReInvestmentLoyaltyProgram;

class ChannelReferController extends Controller
{
    public function chanelRefer(Request $request){

        $loyalityProgram = LoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->get();
        $howWorkLoyaltyPrograms = HowWorkLoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->first();
        $re_investment_loyalty_programs = ReInvestmentLoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->first();
        $refer = ReferLoyaltyProgram::orderBy("id","asc")->whereNull('deleted_at')->get();

        return view("frontend.beconeAnAassociate.chanel-refer",[
            'loyalityProgram' => $loyalityProgram,
            'howWorkLoyaltyPrograms' => $howWorkLoyaltyPrograms,
            're_investment_loyalty_programs' => $re_investment_loyalty_programs,
            'refer' => $refer,
        ]);
    }

    // ==== store storeMemberDetails

    public function storeMemberDetails(Request $request)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'project' => 'required',
            'unit_or_flat' => 'required',
            'refer_f_name' => 'required',
            'refer_l_name' => 'required',
            'refer_email' => 'required',
            'refer_relation' => 'required',
        ]);
    }
}
