<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogModel = Blog::all();
        return view('blog', compact('blogModel'));
    }

    public function blog_post($slug) {

        $singleBlogPost = Blog::where('slug', $slug)->first();
        $relatedBlogs = Blog::where('id', '!=', "$singleBlogPost->id")->get();

        return view('blog-post', compact('singleBlogPost', 'relatedBlogs'));
    }
}
