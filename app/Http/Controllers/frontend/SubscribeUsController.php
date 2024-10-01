<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\SubscriberRequest;
use App\Mail\sendSubscribeUsMail;
use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeUsController extends Controller
{
    public function subscribe(SubscriberRequest $request)
    {

        $data = $request->validated();
        try {

            $memberDetail = new Subscriber();

            $memberDetail->email = $request->email;
            $memberDetail->inserted_at = Carbon::now();
            $memberDetail->save();

            $update = [
                'inserted_by' => $memberDetail->id,
            ];

            Subscriber::where('id', $memberDetail->id)->update($update);

            // ==== send Email
            $mailData = [
                'email' => $request->email,
            ];

            Mail::to('sales@bhairaav.com')->send(new sendSubscribeUsMail($mailData));

            return redirect()->back()->with('message','Thank you for subscribing us. We will send you our latest updates.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }
}
