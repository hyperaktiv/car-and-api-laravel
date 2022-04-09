<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    public function index() {

        $posts = DB::select('select * from posts WHERE id = ?', [7]);

        return view('posts.index');
    }
}
