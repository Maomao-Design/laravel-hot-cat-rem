<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts =Post::orderBy('updated_at','desc')-> paginate(10);
        return view('post.index',compact('posts'));
    }
    public function detail(){
        return view('post.detail');
    }
}
