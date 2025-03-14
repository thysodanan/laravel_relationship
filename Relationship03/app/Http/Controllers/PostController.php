<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post=Post::orderBy('id','DESC')->with('user')->get();
        return $post;   
    }
}
