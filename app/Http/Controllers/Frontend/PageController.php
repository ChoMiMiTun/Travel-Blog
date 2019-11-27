<?php

namespace App\Http\Controllers\Frontend;

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderby('id', 'asc')->paginate(6);
        return view('frontend.index', compact('posts'));
        
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments;
        return view('frontend.show', compact('post', 'comments'));
    }
    
    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blog()
    {
        $posts = Post::orderby('id', 'asc')->paginate(6);
        return view('frontend.blog', compact('posts'));
    }
}
