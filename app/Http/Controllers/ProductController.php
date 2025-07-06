<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function getAll(){
        $products = Product::paginate(12)->onEachSide(2);
        return view("product/productList", compact('products'));
    }

    public function getProductId($id){
        $product = Product::where('id', '=', $id )->first();
        return view('product/productDetail', compact('product'));
    }

    public function getProductByCategory(Category $category){
        $products = Product::where('category_id', '=', $category->id)->paginate(12);

        return view('product/productCategory', compact('category', 'products'));
    }
}
