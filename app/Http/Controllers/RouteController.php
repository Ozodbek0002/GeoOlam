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

        $articles = Article::where('category', 'uz')->paginate(5);
        $title = 'Uzbekcha Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);

    }

    public function article_en()
    {
        $articles = Article::where('category', 'en')->paginate(5);
        $title = 'Inglischa Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);
    }

    public function article_ru()
    {
        $articles = Article::where('category', 'ru')->paginate(5);
        $title = 'Ruscha Maqolalar';
        return view('user.article', [
            'articles' => $articles,
            'title' => $title,
        ]);
    }

    public function slide_uz()
    {
        $slides = Slide::where('category', 'uz')->paginate(5);
        $title = 'Uzbekcha Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }

    public function slide_ru()
    {
        $slides = Slide::where('category', 'ru')->paginate(5);
        $title = 'Ruscha Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }

    public function slide_en()
    {
        $slides = Slide::where('category', 'en')->paginate(5);
        $title = 'Inglischa Slaydlar';
        return view('user.slide', [
            'slides' => $slides,
            'title' => $title,
        ]);
    }

    public function book_lu()
    {
        $books = Book::where('category', 'lu')->paginate(5);
        $title = 'Lug`atlar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }

    public function book_en()
    {
        $books = Book::where('category', 'en')->paginate(5);
        $title = 'Ensiklopediyalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);
    }

    public function book_mo()
    {
        $books = Book::where('category', 'mo')->paginate(5);
        $title = 'Monografiyalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);    }

    public function book_us()
    {
        $books = Book::where('category', 'us')->paginate(5);
        $title = 'Uslubiy qo`llanmalar';
        return view('user.book', [
            'books' => $books,
            'title' => $title,
        ]);    }


    public function cource()
    {
        return view('user.cource');
    }


    public function contact()
    {
        return view('user.contact');
    }


}
