<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Article;
use App\Models\Course;
use App\Models\Book;

class DownloadController extends Controller
{

    public function downloadinfore($file_name)
    {

        $book = Information::where('file', $file_name)->first();
        $book->eye = $book->eye + 1;
        $book->save();

        $file_path = public_path('information/' . $file_name);
        return response()->download($file_path);

    }

    public function downloadArticle($file_name)
    {
        $article = Article::where('file', $file_name)->firstOrFail();
        $article->eye = $article->eye + 1;
        $article->save();

        $file_path = public_path('articles/' . $file_name);
        return response()->download($file_path);
    }

    public function downloadSlide($file_name)
    {
        $slide = Slide::where('file', $file_name)->first();
        $slide->eye = $slide->eye + 1;
        $slide->save();

        $file_path = public_path('slides/' . $file_name);
        return response()->download($file_path);
    }

    public function downloadCourse($file_name)
    {
        $cource = Course::where('file', $file_name)->first();
        $cource->eye = $cource->eye + 1;
        $cource->save();

        $file_path = public_path('courses/' . $file_name);
        return response()->download($file_path);
    }

    public function downloadBook($file_name)
    {
        $book = Book::where('file', $file_name)->first();
        $book->eye = $book->eye + 1;
        $book->save();


        $file_path = public_path('books/' . $file_name);
        return response()->download($file_path);
    }




}
