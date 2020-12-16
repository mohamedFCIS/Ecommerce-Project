<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('frontEnd.layouts.index');
    }
    public function product(){
        $products = Product::all();
        return view('frontEnd.product')->with('products', $products);
    }
}
