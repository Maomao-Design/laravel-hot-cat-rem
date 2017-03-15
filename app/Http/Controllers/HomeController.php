<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertising;

class HomeController extends Controller
{   
    
    public function index()
    {
        
        $advertising = Advertising::where('category_id', 1)->get();

        return view('home',['advertising' => $advertising]);
    }
}
