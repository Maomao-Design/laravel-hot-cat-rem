<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertising;

class HomeController extends Controller
{   
    
    public function index()
    {
        
        $advertising =' Advertising::';

        return view('home',['']);
    }
}
