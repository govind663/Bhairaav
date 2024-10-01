<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function privacyPolicy(Request $request) {
        // Fetch the latest privacy policy
        $privacyPolicy = PrivacyPolicy::orderBy("id", "desc")->whereNull('deleted_at')->first();

        if ($privacyPolicy) {

            // Decode the JSON fields
            $privacyPolicy->data_collection = json_decode($privacyPolicy->data_collection, true);
            $privacyPolicy->use_of_information = json_decode($privacyPolicy->use_of_information, true);
            $privacyPolicy->closure_of_information = json_decode($privacyPolicy->closure_of_information, true);
            $privacyPolicy->data_storage = json_decode($privacyPolicy->data_storage, true);
            $privacyPolicy->rights = json_decode($privacyPolicy->rights, true);
        }

        return view('frontend.privacy-policy.privacy-policy', ['privacyPolicy' => $privacyPolicy]);
    }

}
