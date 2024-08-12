<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChannelPartnerController extends Controller
{
    public function channelPartner(Request $request){
        return view("frontend.beconeAnAassociate.channel-partner");
    }
}
