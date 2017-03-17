<?php

namespace App\Http\Controllers;

use App\Brand;
use App\CategoryBrand;
use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(Request $request)
    {

        $isApi = $request->query('api');

        $brands = Brand::all();

        if($isApi){
            return response()->json($brands);
        }

        $categories = CategoryBrand::all();

        return view('product.index',compact('brands', 'categories'));
    }

    public function products(Request $request, $id){
        $isApi = $request->query('api');

        $brand = Brand::find($id);

        if(!$brand){
            abort(404);
        }

        $products = Product::where('brand_id', $id)->get();

        if($isApi){
            return response()->json($products);
        }

        $categories = CategoryProduct::all();

        return view('product.category',compact('products', 'categories', 'brand'));

    }
}
