<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel 8";
        $descriptions = "Meow";
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung',
        ];

        // Compact method (good for passing in lots of variables)
        // return view('products.index', compact('title', 'descriptions'));

        // With method (good for passing one variable or array)
        // return view('products.index')->with('title', $title);
        return view('products.index')->with('data', $data);
    }
}
