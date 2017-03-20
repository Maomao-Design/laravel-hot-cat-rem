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
    public function detail(Request $request, $id){

//        $post = Post::where('slug', $slug)->first();
        $post = Post::find($id);

        $isApi = $request->query('api');

        if($isApi){
            return response()->json($post);
        }

        if(empty($post)) {
            abort(404);
            return;
        }

        $next = Post::find($this->getNextId($post->id));
        $prev = Post::find($this->getPrevId($post->id));


        return view('post.detail',compact('post','next', 'prev'));
    }

    protected function getPrevId($id)
    {
        return Post::where('id', '<', $id)->max('id');
    }

    protected function getNextId($id)
    {
        return Post::where('id', '>', $id)->min('id');
    }
}
