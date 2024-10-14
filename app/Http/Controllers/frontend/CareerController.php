<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CareerApplyRequest;
use App\Mail\sendCareerApplyMail;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\CareerApplyForm;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class CareerController extends Controller
{
    public function career(Request $request)
    {
        $career = Career::orderBy("id","desc")->whereNull('deleted_at')->first();

        if ($career) {
            // Decode the 'job_title' and 'job_description' JSON fields
            $career->job_titles = json_decode($career->job_title, true);
            $career->job_descriptions = json_decode($career->job_description, true);
        }

        return view('frontend.careers.career', [
            'career' => $career
        ]);
    }

    public function storeCareerApply(CareerApplyRequest $request, string $job_id){
        $data = $request->validated($job_id);
        try {

            $careerApplyForm = new CareerApplyForm();

            // ==== Upload (candidate_resume_doc)
            if (!empty($request->hasFile('candidate_resume_doc'))) {
                $image = $request->file('candidate_resume_doc');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/Career/candidate_resume_doc'), $new_name);

                $image_path = "/bhairaav/Career/candidate_resume_doc" . $new_name;
                $careerApplyForm->candidate_resume_doc = $new_name;
            }

            $careerApplyForm->name = $request->name;
            $careerApplyForm->email = $request->email;
            $careerApplyForm->mobile_no = $request->mobile_no;
            $careerApplyForm->department = $request->department;
            $careerApplyForm->currentdesignation = $request->currentdesignation;
            $careerApplyForm->save();

            $update = [
                'inserted_by' => $careerApplyForm->id,
                'inserted_at' => Carbon::now()
            ];

            CareerApplyForm::where('id', $careerApplyForm->id)->update($update);

            // Send Mail
            $mailData = [
                'job_title' => $request->job_title,
                'name' => $request->name,
                'email' => $request->email,
                'mobile_no' => $request->mobile_no,
                'department' => $request->department,
                'currentdesignation' => $request->currentdesignation,
            ];

            // Pass the actual path of the resume document
            $resumePath = public_path('/bhairaav/Career/candidate_resume_doc/' . $careerApplyForm->candidate_resume_doc);

            // Send Mail
            Mail::to('HR@Bhairaav.com')->send(new sendCareerApplyMail($mailData, $resumePath));

            return redirect()->route('frontend.contact-us')->with('message','Thank you for your interest. We will get back to you within 24 hours.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }
}
