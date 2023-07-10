<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_posts(){
        $posts = Post::all();
        return view('home', ['posts'=>$posts]);
    }

    public function show_details(int $id)
    {   
        $post = Post::find($id);
        return view('details', ['post' => $post]);
    }
}
