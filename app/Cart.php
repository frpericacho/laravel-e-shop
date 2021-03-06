<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $aItem = array();
    public $iTotalItems = 0;
    public $dTotalPrice = 0;

    public function __construct(Cart $cart = null)
    {
        if ($cart != null) {
            $this->aItem = $cart->aItem;
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
        }
    }

    public function add(Product $product)
    {
        if (!array_key_exists($product->id, $this->aItem)) {
            $this->aItem[$product->id] = array("id" => $product->id, "name" => $product->name, "imgurl" => $product->imgurl, "price" => $product->price, "iAmountItem" => 1);
        } else {
            $this->aItem[$product->id]["iAmountItem"] += 1;
        }
        $this->iTotalItems = $this->iTotalItems + 1;
        $this->dTotalPrice = $product->price + $this->dTotalPrice;
    }

    public function remove(Product $product)
    {
        if (array_key_exists($product->id, $this->aItem)) {
            if ($this->aItem[$product->id]["iAmountItem"] > 0) {
                $this->aItem[$product->id]["iAmountItem"] = $this->aItem[$product->id]["iAmountItem"] - 1;
            }
            $this->iTotalItems = $this->iTotalItems - 1;
            $this->dTotalPrice = $this->dTotalPrice - $product->price;
        }
    }

    public function removeAll(Product $product)
    {
        if (array_key_exists($product->id, $this->aItem)) {
            $this->iTotalItems = $this->iTotalItems - $this->aItem[$product->id]["iAmountItem"];
            $this->dTotalPrice = $this->dTotalPrice - $product->price * $this->aItem[$product->id]["iAmountItem"];
            unset($this->aItem[$product->id]);
        }
    }
}
