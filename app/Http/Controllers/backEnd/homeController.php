<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $products = Product::orderby('id' , 'desc')->paginate(10);
        return view('backEnd.layouts.index' , compact('products'));
    }
}
