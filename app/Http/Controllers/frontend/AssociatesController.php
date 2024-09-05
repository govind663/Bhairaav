<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\BackingPartner;
use App\Models\Partner;
use Illuminate\Http\Request;

class AssociatesController extends Controller
{
    public function associates(Request $request){

        $partners = Partner::orderBy("id","desc")->whereNull('deleted_at')->get();
        $backingPartners = BackingPartner::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view("frontend.about.associates", ['backingPartners' => $backingPartners, 'partners' => $partners]);
    }
}
