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

        $blogs = Blog::orderBy("id","asc")->whereNull('deleted_at')->get();

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

    // ===== Serch Blog Details Page with Encrypt Method URL
    public function searchBlogDetails(Request $request, $id){

        try {

            // Search functionality: Get the search keyword from the request
            $searchKeyword = $request->input('search'); // Assuming you're sending a 'search' input

            // Find the blog entry with the decrypted ID
            // Optionally apply the search if a keyword is provided
            $blog = Blog::where('id', $id)
                ->when($searchKeyword, function ($query, $searchKeyword) {
                    return $query->where(function ($query) use ($searchKeyword) {
                        $query->where('blog_title', 'like', "%{$searchKeyword}%")
                              ->orWhere('description', 'like', "%{$searchKeyword}%");
                    });
                })
                ->firstOrFail();

            // Split tags into an array
            $tags = explode(',', $blog->tags);

            // Get categories with post count
            $categoriesWithCount = Category::select('categories.id', 'categories.category_name', DB::raw('COUNT(blogs.id) as post_count'))
                ->leftJoin('blogs', 'categories.id', '=', 'blogs.category_id')
                ->groupBy('categories.id', 'categories.category_name')
                ->orderBy('categories.category_name')
                ->get();

            // Get latest 5 blog entries
            $latestPosts = Blog::orderBy('inserted_at', 'desc')->limit(5)->get();

            // Redirect to the blog details route with the blog and other data
            return view('frontend.blog.view-blog-page', [
                'blog' => $blog,
                'categoriesWithCount' => $categoriesWithCount,
                'latestPosts' => $latestPosts,
                'tags' => $tags,
                'searchKeyword' => $searchKeyword, // Pass the search keyword if needed
            ]);
        } catch (\Exception $ex) {
            // Handle the exception, e.g., log the error or return an error response
            return redirect()->back()->withErrors(['error' => 'Invalid blog ID provided.']);
        }
    }
}
