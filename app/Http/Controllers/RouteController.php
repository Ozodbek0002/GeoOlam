<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{


    public function article_uz(){

        $articles=Article::paginate(20);
        return view('user.article');

    }
    public function article_us(){
        return view('user.article');
    }
    public function article_ru(){
        return view('user.article');
    }

    public function slide()
    {
        return view('user.slide');
    }

    public function book()
    {
        return view('user.book');
    }

    public function cource()
    {
        return view('user.cource');
    }


    public function contact()
    {
        return view('user.contact');
    }




}
