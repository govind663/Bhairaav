<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blogList(Request $request){
        $blogs = Blog::orderBy("id","desc")->whereNull('deleted_at')->paginate(6);
        return view("frontend.blog.all-blog-list", ['blogs'=> $blogs]);
    }

    public function blogDetails(Request $request, $id){

        $blog = Blog::findOrFail($id);

        $tags = explode(',', $blog->tags);
        // dd($tags);

        // Get categories with post count
        $categoriesWithCount = Category::select('categories.id', 'categories.category_name', DB::raw('COUNT(blogs.id) as post_count'))
                                ->leftJoin('blogs', 'categories.id', '=', 'blogs.category_id')
                                ->groupBy('categories.id', 'categories.category_name')
                                ->orderBy('categories.category_name')
                                ->get();

        // Get latest 5 blog entries
        $latestPosts = Blog::orderBy('inserted_at', 'desc')->limit(5)->get();

        return view("frontend.blog.view-blog-page", [
            'blog' => $blog,
            'categoriesWithCount' => $categoriesWithCount,
            'latestPosts' => $latestPosts,
            'tags' => $tags,
        ]);
    }
}
