<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function detail(Request $request, $id)
    {
        $isApi = $request->query('api');
        $product = Product::find($id);

        if(!$product){
            abort(404);
        }

        if($isApi){
            return response()->json($product);
        }



        $product->images = json_decode($product->images);

//        if($product->images == null){
//            $product->images = array();
//        }


        $category = CategoryProduct::find($product->id);

        $next = Product::find($this->getNextId($product->id));
        $prev = Product::find($this->getPrevId($product->id));

        return view('product.detail', compact('product', 'category', 'next', 'prev'));
    }

    public function search(Request $request){
        $isApi = $request->query('api');
        $title = $request->query('s');

        $products = Product::where('title', 'like', '%'.$title.'%')->get();

        if($isApi){
            return response()->json($products);
        }

        $categories = CategoryProduct::all();

        return view('product.search',compact('products','categories','title'));
    }


    protected function getPrevId($id)
    {
        return Product::where('id', '<', $id)->max('id');
    }

    protected function getNextId($id)
    {
        return Product::where('id', '>', $id)->min('id');
    }
}
