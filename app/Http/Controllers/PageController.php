<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('slug', $slug)->first();

        if(empty($page)) {
            dd('page is empty');
            return;
        }

        $view = 'page.index';

        if($slug == 'about'){
            $view = 'page.about';
        }elseif ($slug == 'contact'){
            $view = 'page.contact';
        }

        return view($view, compact('page'));
    }
}
