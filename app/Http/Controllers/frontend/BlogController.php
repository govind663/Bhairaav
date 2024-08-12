<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogList(Request $request){
        return view("frontend.blog.all-blog-list");
    }

    public function blogDetails(Request $request){
        return view("frontend.blog.view-blog-page");
    }
}
