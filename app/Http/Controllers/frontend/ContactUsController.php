<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
        return view("frontend.contact.contact-us");
    }

    // ==== Store Contact Us

    public function storeContactUs(ContactUsRequest $request){
        $data = $request->validated();
        try {

            $contactUs = new ContactUs();

            $contactUs->name = $request->name;
            $contactUs->email = $request->email;
            $contactUs->phone_no = $request->phone_no;
            $contactUs->subject = $request->subject;
            $contactUs->message = $request->message;
            $contactUs->save();

            $update = [
                'inserted_by' => $contactUs->id,
                'inserted_at' => Carbon::now()
            ];

            ContactUs::where('id', $contactUs->id)->update($update);

            Mail::send('frontend.emails.contact_us_mail', [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_no' => $request->input('phone_no'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ], function($message) use ($request) {
                $message->from('sales@bhairaavlifestyles.com', 'sales@bhairaavlifestyles.com');
                $message->to($request->input('email'));
                $message->subject('Bhairava Lifestyles - Contact Us');
            });

            return redirect()->route('frontend.contact-us')->with('message','Thank you for your interest. We will get back to you within 24 hours.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }
}
