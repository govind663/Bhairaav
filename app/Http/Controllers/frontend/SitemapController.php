<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function sitemap(Request $request)
    {
        return view('frontend.sitemap.whole-websit-maping');
    }
}
