<?php

namespace App\Http\Controllers;

use App\Brand;
use App\CategoryBrand;
use App\Product;
use Illuminate\Http\Request;
use App\Advertising;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{   
    
    public function index(Request $request)
    {
        
        $advertising = Advertising::where('category_id', 1)->get();

//        $products =Product::orderBy('updated_at','desc')-> paginate(20);

        $brands = Brand::orderBy('updated_at','desc')->take(3)->get();

        $posts = Post::orderBy('updated_at','desc')->take(5)->get();

        $hot = Product::where('hot',1)->first();
//        dd($hot);

        $categories = CategoryBrand::all();

        return view('home',compact('advertising', 'categories', 'brands', 'posts', 'hot'));
    }
}
