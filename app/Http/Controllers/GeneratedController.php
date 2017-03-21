<?php

namespace App\Http\Controllers;

use App\Contracts\AnCache;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class GeneratedController extends Controller
{
    const tag = 'generated';

    private $AnCache;

    public function siteMap()
    {
        $view = $this->getAnCache()->remember('generated.sitemap', function () {

            $posts = Post::all();
        // return generated xml (string) , cache whole file
        return view('generated.sitemap', compact('posts'))->render();
    });
        return response($view)->header('Content-Type', 'text/xml');
    }

    public function feed()
    {
        $view = $this->getAnCache()->remember('generated.sitemap', function () {
            $posts = Post::all();
        // return generated xml (string) , cache whole file
        return view('generated.feed', compact('posts'))->render();
    });
        return response($view)->header('Content-Type', 'text/xml');
    }

    private function  getAnCache(){
        if ($this->AnCache == null) {
            $this->AnCache = app('AnCache');
            $this->AnCache->setTag(GeneratedController::tag);
            $this->AnCache->setTime(60 * 24);
        }
        return $this->AnCache;
    }
}
