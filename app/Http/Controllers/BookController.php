<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::paginate(10);
        return view('admin.books.index',[
            'books'=>$data
        ]);
    }


    public function create()
    {
        return view('admin.books.create');
    }


    public function store(Request $request)
    {
        $data = new Book();

        $book = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'author'=>'required',
            'image'=>'required',
            'file'=>'required',
        ],[
            'title.required'=>'Iltimos kitob tomini kiriting.',
            'description.required'=>'Iltimos qisqacha izoh yozing.',
            'author.required'=>'Iltimos kitob muallifini kiriting.',
            'image.required'=>'Iltimos rasm yuklang.',
            'file.required'=>'Iltimos kitob faylini yuklang.',
        ]);

        $data->title = $book['title'];
        $data->description = $book['description'];
        $data->author = $book['author'];
        $data->category = $request->category;

        $imagename = $request->file('image')->getClientOriginalName();
        $request->image->move('books', $imagename);
        $data->image = $imagename;

        $filename = $request->file('file')->getClientOriginalName();
        $request->file->move('books', $filename);
        $data->file = $filename;

        $data->save();

        return redirect()->route('admin.books');
    }


    public function show(Book $book)
    {
        //
    }


    public function edit(Book $book)
    {
        return view('admin.books.edit',[
            'book'=>$book
        ]);
    }


    public function update(Request $request, Book $book)
    {

        $book->title = $request->title;
        $book->description = $request->description;
        $book->author = $request->author;
        $book->category = $request->category;

        if ($request->image != null) {

            $image_path = public_path("books/{$book->image}");

            if (Book::exists($image_path)) {
            File::delete($image_path);
            }

            $imagename = $request->file('image')->getClientOriginalName();
            $request->image->move('books', $imagename);
            $book->image = $imagename;
        };

        if ($request->file != null) {

            $image_path = public_path("books/{$book->file}");

            if (Book::exists($image_path)) {
                File::delete($image_path);
            }

            $filename = $request->file('file')->getClientOriginalName();
            $request->file->move('books', $filename);
            $book->file = $filename;
        };

        $book->save();
        return redirect()->route('admin.books');

    }


    public function destroy(Book $book)
    {
        $image_path = public_path("books/{$book->file}");
        $file_path = public_path("books/{$book->image}");

        if (Book::exists($image_path)) {
            File::delete($image_path);
        }
        if (Book::exists($file_path)) {
            File::delete($file_path);
        }

        $book->delete();
        return redirect()->route('admin.books');
    }
}
