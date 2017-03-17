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

        $category = CategoryProduct::find($product->id);

        return view('product.detail', compact('product', 'category'));
    }
}
