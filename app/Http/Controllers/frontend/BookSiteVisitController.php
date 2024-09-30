<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\BookSiteVisitRequest;
use App\Mail\BookSiteVisitMail;
use App\Models\BookSiteVisit;
use App\Models\Projects;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookSiteVisitController extends Controller
{
    public function bookVisit(BookSiteVisitRequest $request)
    {
        $request->validated();
        // dd($request);
        try {

            // Insert Data
            $bookSiteVisit = new BookSiteVisit();

            $bookSiteVisit->projects_id = $request->projects_id;
            $bookSiteVisit->name = $request->name;
            $bookSiteVisit->email = $request->email;
            $bookSiteVisit->phone = $request->phone;
            $bookSiteVisit->visiting_date = date("Y-m-d", strtotime($request->visiting_date));
            $bookSiteVisit->visiting_time = date("H:i", strtotime($request->visiting_time));
            $bookSiteVisit->save();

            $update = [
                'inserted_by' => $bookSiteVisit->id,
                'inserted_at' => Carbon::now()
            ];

            BookSiteVisit::where('id', $bookSiteVisit->id)->update($update);

            // ==== fetch project name based on id
            $projectName = Projects::where('id', $request->projects_id)
                                    ->select('project_name')
                                    ->first();

            // Send Mail
            $mailData = [
                'project_name' => $projectName->project_name,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'visiting_date' => date("Y-m-d", strtotime($request->visiting_date)),
                'visiting_time' => date("H:i", strtotime($request->visiting_time)),
            ];

            // Mail::send('frontend.emails.book-site-visit', $mailData, function($message) use ($request) {
            //     $message->from($request->input('email'), $request->input('email'));
            //     $message->to('infobhairaav@gmail.com');
            //     $message->subject('Property Request');
            // });

            Mail::to('infobhairaav@gmail.com')->send(new BookSiteVisitMail($mailData));

            return redirect()->back()->with('message','Thank you for your interest. We will get back to you within 24 hours.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }
}
