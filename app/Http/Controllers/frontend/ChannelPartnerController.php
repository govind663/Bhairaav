<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ChannelPartnerRequest;
use App\Models\Chanel;
use App\Models\ChannelPartner;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChannelPartnerController extends Controller
{
    public function channelPartner(Request $request)
    {
        // Fetch the Chanel
        $chanelName = Chanel::orderBy("id","desc")->whereNull('deleted_at')->get(['id', 'name']);

        return view("frontend.beconeAnAassociate.channel-partner", [
            'chanelName' => $chanelName
        ]);
    }

    // ===== Store  Channel Partner

    public function storeChannelPartner(ChannelPartnerRequest $request){
        $data = $request->validated();
        try {
            // ==== Create new record in ChannelPartner
            $channelPartner = new ChannelPartner();

            // ==== Upload (pancard_doc)
            if (!empty($request->hasFile('pancard_doc'))) {
                $image = $request->file('pancard_doc');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/channel_partner/pancard_doc'), $new_name);

                $image_path = "/bhairaav/channel_partner/pancard_doc" . $new_name;
                $channelPartner->pancard_doc = $new_name;
            }

            // ==== Upload (aadhar_doc)
            if (!empty($request->hasFile('aadhar_doc'))) {
                $image = $request->file('aadhar_doc');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/channel_partner/aadhar_doc'), $new_name);

                $image_path = "/bhairaav/channel_partner/aadhar_doc" . $new_name;
                $channelPartner->aadhar_doc = $new_name;
            }

            $channelPartner->companyNameOrIndividualName = $request->companyNameOrIndividualName;
            $channelPartner->nameOfTheOwner = $request->nameOfTheOwner;
            $channelPartner->entity = $request->entity;
            $channelPartner->officeAddress = $request->officeAddress;
            $channelPartner->telephoneNumber = $request->telephoneNumber;
            $channelPartner->mobileNumber = $request->mobileNumber;
            $channelPartner->website = $request->website;
            $channelPartner->emailId = $request->emailId;
            $channelPartner->numberOfYearsInOperation = $request->numberOfYearsInOperation;
            $channelPartner->preferredExpertise = $request->preferredExpertise;
            $channelPartner->panCardNo = $request->panCardNo;
            $channelPartner->gstNo = $request->gstNo;
            $channelPartner->reraNo = $request->reraNo;
            $channelPartner->brokerAffiliation = $request->brokerAffiliation;
            $channelPartner->chanel_id = $request->chanel_id;
            $channelPartner->propertiesType = $request->propertiesType;
            $channelPartner->authorizedSignatories = $request->authorizedSignatories;
            $channelPartner->name = $request->name;
            $channelPartner->designation = $request->designation;
            $channelPartner->terms = $request->terms;
            $channelPartner->save();

            $update = [
                'inserted_by' => $channelPartner->id,
                'inserted_at' => Carbon::now()
            ];

            ChannelPartner::where('id', $channelPartner->id)->update($update);

            return redirect()->back()->with('message','Your record has been successfully created.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }

}
