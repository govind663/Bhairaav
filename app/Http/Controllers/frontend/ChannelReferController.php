<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\MemberDetailRequest;
use App\Mail\sendChannelReferMail;
use App\Models\HowWorkLoyaltyProgram;
use App\Models\LoyaltyProgram;
use App\Models\MemberDetail;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Models\ReferLoyaltyProgram;
use App\Models\ReInvestmentLoyaltyProgram;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ChannelReferController extends Controller
{
    public function chanelRefer(Request $request){

        $loyalityProgram = LoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->get();
        $howWorkLoyaltyPrograms = HowWorkLoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->first();
        $re_investment_loyalty_programs = ReInvestmentLoyaltyProgram::orderBy("id","desc")->whereNull('deleted_at')->first();
        $refer = ReferLoyaltyProgram::orderBy("id","asc")->whereNull('deleted_at')->get();

        // === Fetch Project
        $projects = Projects::orderBy("id","desc")->whereNull('deleted_at')->get([
            'id',
            'project_name'
        ]);

        return view("frontend.beconeAnAassociate.chanel-refer",[
            'loyalityProgram' => $loyalityProgram,
            'howWorkLoyaltyPrograms' => $howWorkLoyaltyPrograms,
            're_investment_loyalty_programs' => $re_investment_loyalty_programs,
            'refer' => $refer,
            'projects' => $projects
        ]);
    }

    // ==== store storeMemberDetails
    public function storeMemberDetails(MemberDetailRequest $request)
    {

        $data = $request->validated();
        try {

            // ==== Create new record in Member Detail
            $memberDetail = new MemberDetail();

            $memberDetail->f_name = $request->f_name;
            $memberDetail->l_name = $request->l_name;
            $memberDetail->mobile_no = $request->mobile_no;
            $memberDetail->email = $request->email;
            $memberDetail->projects_id = $request->project;
            $memberDetail->unit_or_flat = $request->unit_or_flat;
            $memberDetail->refer_f_name = json_encode($request->refer_f_name);
            $memberDetail->refer_l_name = json_encode($request->refer_l_name);
            $memberDetail->refer_email = json_encode($request->refer_email);
            $memberDetail->refer_relation = json_encode($request->refer_relation);
            $memberDetail->inserted_at = Carbon::now();
            $memberDetail->save();

            $update = [
                'inserted_by' => $memberDetail->id,
            ];

            MemberDetail::where('id', $memberDetail->id)->update($update);

            // ==== Fetch Project Name
            $project = Projects::where('id', $request->project)->first();
            $projectName = $project->project_name;

            // ==== send Email
            $mailData = [
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'mobile_no' => $request->mobile_no,
                'email' => $request->email,
                'project' => $projectName,
                'unit_or_flat' => $request->unit_or_flat,
                'refer_f_name' => $request->refer_f_name,
                'refer_l_name' => $request->refer_l_name,
                'refer_email' => $request->refer_email,
                'refer_relation' => $request->refer_relation
            ];
            Mail::to('sales@bhairaav.com')->send(new sendChannelReferMail($mailData));

            return redirect()->back()->with('message','Member details have been successfully added. Thank you for updating the referral information.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }
}
