<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\PropertyRequest as PropertiesRequest;
use Illuminate\Http\Request;
use App\Models\PropertyRequest;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class PropertiesRequestController extends Controller
{
    // ==== Store Contact Us
    public function storePropertiesRequest(PropertiesRequest $request){
        $data = $request->validated();
        try {

            $propertyRequest = new PropertyRequest();

            $propertyRequest->name = $request->name;
            $propertyRequest->email = $request->email;
            $propertyRequest->phone = $request->phone_no;
            $propertyRequest->subject = $request->subject;
            $propertyRequest->flat_type = $request->flat_type;
            $propertyRequest->save();

            $update = [
                'inserted_by' => $propertyRequest->id,
                'inserted_at' => Carbon::now()
            ];

            PropertyRequest::where('id', $propertyRequest->id)->update($update);

            // Send Mail
            $mailData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_no' => $request->input('phone_no'),
                'subject' => $request->input('subject'),
                'flat_type' => $request->input('flat_type'),
            ];

            Mail::send('frontend.emails.request_propertis_mail', $mailData, function($message) use ($request) {
                $message->from('sales@bhairaavlifestyle.com', 'sales@bhairaavlifestyle.com');
                $message->to($request->input('email'));
                $message->subject('Property Request');
                $message->replyTo('sales@bhairaavlifestyle.com', 'sales@bhairaavlifestyle.com');
                $message->cc('sales@bhairaavlifestyle.com', 'sales@bhairaavlifestyle.com');
            });

            return redirect()->back()->with('message','Thank you for your interest. We will get back to you within 24 hours.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }
}
