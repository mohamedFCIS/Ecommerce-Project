<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('frontEnd.product')->with('products', $products);    }
   
}
