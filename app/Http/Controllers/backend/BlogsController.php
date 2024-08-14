<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy("id","desc")->whereNull('deleted_at')->get();
        return view('backend.blog.index', ['blogs'=> $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $data = $request->validated();
        try {
            $blog = Blog::create($data);

            // ==== Upload (blog_image)
            if (!empty($request->hasFile('blog_image'))) {
                $image = $request->file('blog_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/blog/blog_image'), $new_name);

                $image_path = "/bhairaav/blog/blog_image" . $image_name;
                $blog->blog_image = $new_name;
            }

            $blog->blog_title = $data['blog_title'];
            $blog->description = $data['description'];
            $blog->categories = $data['categories'];
            $blog->tags = $data['tags'];
            $blog->posted_dt = Carbon::now();
            $blog->inserted_at = Carbon::now();
            $blog->inserted_by = Auth::user()->id;
            $blog->save();

            return redirect()->route('blogs.index')->with('message','Your record has been successfully created.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit', [
            'blog'=> $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        $data = $request->validated();
        try {

            $blog = Blog::findOrFail($id);

            // ==== Upload (blog_image)
            if (!empty($request->hasFile('blog_image'))) {
                $image = $request->file('blog_image');
                $image_name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/bhairaav/blog/blog_image'), $new_name);

                $image_path = "/bhairaav/blog/blog_image" . $image_name;
                $blog->blog_image = $new_name;
            }

            $blog->blog_title = $data['blog_title'];
            $blog->description = $data['description'];
            $blog->categories = $data['categories'];
            $blog->tags = $data['tags'];
            $blog->posted_dt = Carbon::now();
            $blog->modified_at = Carbon::now();
            $blog->modified_by = Auth::user()->id;
            $blog->save();

            return redirect()->route('blogs.index')->with('message','Your record has been successfully updated.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data['deleted_by'] =  Auth::user()->id;
        $data['deleted_at'] =  Carbon::now();
        try {

            $blog = Blog::findOrFail($id);
            $blog->update($data);

            return redirect()->route('blogs.index')->with('message','Your record has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
