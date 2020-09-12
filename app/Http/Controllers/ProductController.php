<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function welcome(){
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();
        return view('layouts.welcome', compact('aProduct_offering','aProduct_new'));
    }

    function detail(Product $product){
        return view('product.detail',compact('product'));
    }
}
