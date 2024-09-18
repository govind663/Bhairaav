<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChannelPartner;

class AdminChannelPartnerController extends Controller
{

    public function channelPartner(){

        $channelPartner = ChannelPartner::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.channel_partner.index', ['channelPartner' => $channelPartner]);
    }

    public function viewChannelPartner($id){

        $channelPartner = ChannelPartner::with('channel')->find($id);

        return view('backend.channel_partner.view', ['channelPartner' => $channelPartner]);
    }
}
