<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function page(){

        $page = Page::get();


        return view('page.pages', compact('page'));
    }

    public function singlepage($slug){
        dd($slug);
        $singlepage = Page::where('slug'. $slug)->fistOrFile();


        return view('page.singlepage', compact('singlepage'));
    }
}
