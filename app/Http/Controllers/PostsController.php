<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 3;
        $posts = DB::table('posts')
            // never use ->whereRaw() unless you want hackers to do SQL injections
            ->select('title')
            ->distinct()
            ->get();

        dd($posts);
    }
}
