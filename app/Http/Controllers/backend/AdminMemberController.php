<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberDetail;

class AdminMemberController extends Controller
{
    public function memberDetails(Request $request){
        $members = MemberDetail::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.member_details.index',['members' => $members]);
    }

    public function memberDetailsView(Request $request, $id){

        // Get the member
        $member = MemberDetail::where('id',$id)->first();

        // Get the referral details
        $referralDetails = [];
        if (!is_null($member)) {

            $referralDetails['referFirstName'] = json_decode($member->refer_f_name, true);
            $referralDetails['referLastName'] = json_decode($member->refer_l_name, true);
            $referralDetails['referEmail'] = json_decode($member->refer_email, true);
            $referralDetails['referRelation'] = json_decode($member->refer_relation, true);
        } else {

            $referralDetails = [];
        }

        // Combine referral details into an array of associative arrays
        $combinedReferralDetails = [];
        $count = count($referralDetails['referFirstName']);
        for ($i = 0; $i < $count; $i++) {
            $combinedReferralDetails[] = [
                'refer_f_name' => $referralDetails['referFirstName'][$i] ?? '',
                'refer_l_name' => $referralDetails['referLastName'][$i] ?? '',
                'refer_email' => $referralDetails['referEmail'][$i] ?? '',
                'refer_relation' => $referralDetails['referRelation'][$i] ?? '',
            ];
        }


        // dd($combinedReferralDetails);

        return view('backend.member_details.view',[
            'member' => $member,
            'referralDetails' => $referralDetails,
            'combinedReferralDetails' => $combinedReferralDetails,
        ]);
    }
}
