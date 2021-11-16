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
            // ->max('id');
            // ->avg('id');
            // ->sum('id');
            ->where('id', $id)
            ->count();
        dd($posts);
    }
}
