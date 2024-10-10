<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactUsRequest;
use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

            // ==== Store form data in session
            // Session::put('form_data', $data);
            // Session::put('form_time', Carbon::now());

            // Create and save the contact
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

            // Send Mail
            $mailData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_no' => $request->input('phone_no'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];

            // Mail::send('frontend.emails.contact_us_mail', $mailData, function($message) use ($request) {
            //     $message->from($request->input('email'));
            //     $message->to('sales@bhairaav.com', 'sales@bhairaav.com');
            // });

            Mail::from($request->input('email'), $request->input('name'))
            ->to('sales@bhairaav.com')->send(new ContactUsMail($mailData));

            return redirect()->route('frontend.contact-us')->with('message','Thank you for your interest. We will get back to you within 24 hours.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }
}
