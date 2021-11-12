<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // Directly passed into view
        return view('products.index', []);
    }

    public function show($name)
    {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung',
        ];

        return view('products.index', [
            // with ?? if option on left returns null then do option on right and say product does not exist
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist.'
        ]);
    }
}
