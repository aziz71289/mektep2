<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{
    public function index(){

        $posts = Post::limit(2)->get();


        return view('home.index', compact('posts'));
    }



    public function administration(){

        return view('administration', compact('administration'));
    }

}
