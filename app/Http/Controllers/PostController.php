<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//todo 26
use App\Post;

class PostController extends Controller
{
    //todo 17

    //todo 19
    public function create(){
        return view('post.create');
    }

    //todo 25
    public function store(){
        //todo 28
        Post::created([
            'title'=>\request('title'),
            'slug' => Str::slug(request('title')),
            'content'=>\request('content'),
            'category_id' => \request('category_id')
        ]);

    }

}
