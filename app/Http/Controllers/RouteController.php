<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Slide;
use App\Models\Book;
use App\Models\Course;


class RouteController extends Controller
{


    public function article_uz()
    {

        $articles = Article::where('category', 'uz')->paginate(6);
        $title = 'Uzbekcha Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);

    }

    public function article_en()
    {
        $articles = Article::where('category', 'en')->paginate(6);
        $title = 'Inglischa Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);
    }

    public function article_ru()
    {
        $articles = Article::where('category', 'ru')->paginate(6);
        $title = 'Ruscha Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);
    }


    public function slide_uz()
    {
        $slides = Slide::where('category', 'uz')->paginate(4);
        $title = 'Uzbekcha Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }

    public function slide_ru()
    {
        $slides = Slide::where('category', 'ru')->paginate(4);
        $title = 'Ruscha Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }

    public function slide_en()
    {
        $slides = Slide::where('category', 'en')->paginate(4);
        $title = 'Inglischa Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }


    public function book_lu()
    {
        $books = Book::where('category', 'lu')->paginate(3);
        $title = 'Lug`atlar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }

    public function book_en()
    {
        $books = Book::where('category', 'en')->paginate(3);
        $title = 'Ensiklopediyalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }

    public function book_mo()
    {
        $books = Book::where('category', 'mo')->paginate(3);
        $title = 'Monografiyalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }

    public function book_us()
    {
        $books = Book::where('category', 'us')->paginate(3);
        $title = 'Uslubiy qo`llanmalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }


    public function cource_uz()
    {
        $cources = Course::where('category', 'uz')->paginate(6);
        $title = "Uzbekcha Kurs ishlar";
        return view('user.cource', [
            'cources' => $cources,
            'title' => $title,
        ]);
    }

    public function cource_ru()
    {
        $cources = Course::where('category', 'ru')->paginate(6);
        $title = "Ruscha Kurs ishlar";
        return view('user.cource', [
            'cources' => $cources,
            'title' => $title,
        ]);
    }

    public function cource_en()
    {
        $cources = Course::where('category', 'en')->paginate(6);
        $title = "Inglischa Kurs ishlar";
        return view('user.cource', [
            'cources' => $cources,
            'title' => $title,
        ]);
    }


    public function informations()
    {
        return view('user.informations',[
            'title' => 'Qiziqarli Ma`lumotlar'
        ]);
    }


    public function contact()
    {
        return view('user.contact');
    }


}
