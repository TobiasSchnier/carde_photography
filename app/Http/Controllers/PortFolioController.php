<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PortFolioController extends Controller
{

    public function index(Post $post)
    {
        if(!empty($_GET['tag'])){
            $posts = Post::where('tag',$_GET['tag'])->get();
        }else{
            $posts = Post::latest()->get();
        }
        
        return view('portfolio.index',['posts'=>$posts]);
    }
}
