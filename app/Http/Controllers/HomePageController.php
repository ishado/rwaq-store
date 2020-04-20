<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomePageController extends Controller
{
    public function index()
    {
        $posts = Post::select('post_id','post_title','post_price')
                        ->latest()
                        ->paginate(9);
        return view('front.index' , compact('posts'));
    }

    public function adsByCategory($id)
    {
        $posts = Post::where('category_id', $id)->get();
        return view('front.byCategory', compact('posts'));
    }

    public function adsDetails($id)
    {
        $post = Post::find($id);
        return view('front.details', compact('post'));
    }
}
