<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PortFolioController extends Controller
{

    public function index(Post $post)
    {
        $posts = Post::latest()->get();
        return view('portfolio.index',['posts'=>$posts]);
    }
}
