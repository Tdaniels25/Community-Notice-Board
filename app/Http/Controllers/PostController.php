<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'headline' => 'required',
            'author_name' => 'required',
            'body_text' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Post::create([
            'headline' => $request->input('headline'),
            'author_name' => $request->input('author_name'),
            'body_text' => $request->input('body_text'),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function index()
    {
        $posts = Post::with('author')->latest()->get();
        return view('posts.index', compact('posts'));
    }
}
