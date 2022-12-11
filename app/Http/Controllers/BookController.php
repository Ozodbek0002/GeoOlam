<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::paginate(10);
        return view('admin.books.index',[
            'books'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('books', $imagename);
        $data->image = $imagename;

        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('books', $filename);
        $data->file = $filename;

        $data->save();

        return redirect()->route('admin.books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit',[
            'book'=>$book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->title = $request->title;
        $book->description = $request->description;
        $book->author = $request->author;
        $book->category = $request->category;

        if ($request->image != null) {
            $image = $request->image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('books', $imagename);
            $book->image = $imagename;
        };

        if ($request->file != null) {
            $file = $request->file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('books', $filename);
            $book->file = $filename;
        };

        $book->save();
        return redirect()->route('admin.books');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books');
    }
}
