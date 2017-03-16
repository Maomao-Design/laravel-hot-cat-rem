<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        return view('product.index');
    }

    public function category(){
        return view('product.category');
    }

    public function detail(){
        return view('product.detail');
    }
}
