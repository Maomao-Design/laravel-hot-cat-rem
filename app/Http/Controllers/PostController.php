<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $paginate = $request->query('paginate');
        $isApi = $request->query('api');
        if(!$paginate){
            $paginate = 10;
        }
        $posts =Post::orderBy('updated_at','desc')-> paginate($paginate);

        if($isApi){
           return response()->json($posts);
        }

        return view('post.index',compact('posts'));
    }
    public function detail(Request $request, $slug){

        $post = Post::where('slug', $slug)->first();

        $isApi = $request->query('api');

        if($isApi){
            return response()->json($post);
        }

        if(empty($post)) {
            dd('page is empty');
            return;
        }
        return view('post.detail',compact('post'));
    }
}
