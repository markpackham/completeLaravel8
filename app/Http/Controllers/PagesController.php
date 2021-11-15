<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $names = ['John', 'Mike', 'Dave', 'Jess'];
        // turn $names into an empty array
        $names = [];
        return view('about', ['names' => $names]);
    }
}
