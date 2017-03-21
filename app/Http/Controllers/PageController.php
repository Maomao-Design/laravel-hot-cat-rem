<?php

namespace App\Http\Controllers;

use App\Team;
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

        $teams = Team::all();

        return view($view, compact('page','teams'));
    }
}
