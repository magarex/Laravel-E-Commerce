<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index(){

        $products=Product::orderBy('id','desc')->take(8)->get();
        return view('front.home', compact('products'));

    }
}
