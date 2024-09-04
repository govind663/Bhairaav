<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function media(Request $request){

        $medias = Media::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('frontend.media.gallary', ['medias' => $medias]);
    }
}
