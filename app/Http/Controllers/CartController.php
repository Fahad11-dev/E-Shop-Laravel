<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function ProductList(){
        $products = Product::all();
        return view('frontend.home',compact('products'));
    }
}
