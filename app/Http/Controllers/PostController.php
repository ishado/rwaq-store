<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
    Country,
    Category,
    Post,
    Image
};

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function create()
    {
        $categories = Category::pluck('category_name','category_id');
        $countries = Country::pluck('country_name', 'country_id');
        return view('front.addPost', compact('categories'),compact('countries'));
    }

    public function store(Request $req)
    {
        $post=Post::create($req->all() + ['user_id' => $req->user()->id]);
        foreach($req->images as $image)
        {
            $filename=$image->store('public/images');
            $image = new Image();
            $image->image_name = basename($filename);
            $post->images()->save($image);
        }
        return back()->with('success','تم إضافة الاعلان بنجاح');
    }
}
