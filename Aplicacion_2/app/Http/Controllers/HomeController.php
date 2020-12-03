<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();

        return view('index', compact('categories', 'products'));
    }
}
