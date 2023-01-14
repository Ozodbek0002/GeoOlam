<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Slide;
use App\Models\Book;
use App\Models\Course;
use App\Models\Information;


class RouteController extends Controller
{


    public function article_uz()
    {

        $articles = Article::where('category', 'uz')->latest()->paginate(8);
        $title = 'Uzbekcha Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);

    }

    public function article_en()
    {
        $articles = Article::where('category', 'en')->latest()->paginate(8);
        $title = 'Inglischa Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);
    }

    public function article_ru()
    {
        $articles = Article::where('category', 'ru')->latest()->paginate(8);
        $title = 'Ruscha Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);
    }


    public function slide_uz()
    {
        $slides = Slide::where('category', 'uz')->latest()->paginate(8);
        $title = 'Uzbekcha Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }

    public function slide_ru()
    {
        $slides = Slide::where('category', 'ru')->latest()->paginate(8);
        $title = 'Ruscha Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }

    public function slide_en()
    {
        $slides = Slide::where('category', 'en')->latest()->paginate(8);
        $title = 'Inglischa Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }


    public function book_lu()
    {
        $books = Book::where('category', 'lu')->latest()->paginate(8);
        $title = 'Lug`atlar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }

    public function book_en()
    {
        $books = Book::where('category', 'en')->latest()->paginate(8);
        $title = 'Ensiklopediyalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }

    public function book_mo()
    {
        $books = Book::where('category', 'mo')->latest()->paginate(8);
        $title = 'Monografiyalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }

    public function book_us()
    {
        $books = Book::where('category', 'us')->latest()->paginate(8);
        $title = 'Uslubiy qo`llanmalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }


    public function cource_uz()
    {
        $cources = Course::where('category', 'uz')->latest()->paginate(8);
        $title = "Uzbekcha Kurs ishlar";
        return view('user.cource', [
            'cources' => $cources,
            'title' => $title,
        ]);
    }

    public function cource_ru()
    {
        $cources = Course::where('category', 'ru')->latest()->paginate(8);
        $title = "Ruscha Kurs ishlar";
        return view('user.cource', [
            'cources' => $cources,
            'title' => $title,
        ]);
    }

    public function cource_en()
    {
        $cources = Course::where('category', 'en')->latest()->paginate(8);
        $title = "Inglischa Kurs ishlar";
        return view('user.cource', [
            'cources' => $cources,
            'title' => $title,
        ]);
    }


    public function informations()
    {
        $data = Information::latest()->paginate(8);
        return view('user.informations',[
            'data' => $data,
            'title' => 'Qiziqarli Ma`lumotlar'
        ]);
    }

    public function videos(){
        $videos = Video::latest()->paginate(6);

        return view('user.videos',[
            'videos'=>$videos,
        ]);
    }

    public function contact()
    {
        return view('user.contact');
    }


}
