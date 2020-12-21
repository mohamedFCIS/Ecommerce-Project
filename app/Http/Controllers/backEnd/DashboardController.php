<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;

class DashboardController extends Controller
{

    public function index()
    {
        $products = Product::orderby('id', 'desc')->paginate(10);
        return view('backEnd.layouts.index', compact('products'));
    }
}

