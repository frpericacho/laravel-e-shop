<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Request $request)
    {
        $actualCart = new Cart($request->session()->get('cart', null));
        return view('cart.detail');
    }

    public function add(Product $product, Request $request)
    {
        session()->get('cart', null)->add($product);
        return view('cart.detail', compact('cart'));
    }

    public function remove(Product $product, Request $request)
    {
        session()->get('cart', null)->remove($product);
        return view('cart.detail');
    }

    public function removeAll(Product $product, Request $request)
    {
        session()->get('cart', null)->removeAll($product);
        return view('cart.detail');
    }

    public function operation(String $sOperation, Product $product, Request $request)
    {
        if (array_key_exists($product->id, session()->get('cart', null)->aItem)) {
            switch ($sOperation) {
                case "add":
                    session()->get('cart', null)->add($product);
                    break;
                case "remove":
                    session()->get('cart', null)->remove($product);
                    break;
                case "removeAll":
                    session()->get('cart', null)->removeAll($product);
                    break;
            }
        }
        return view('cart.detail');
    }
}
