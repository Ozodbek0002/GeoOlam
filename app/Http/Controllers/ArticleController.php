<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::paginate(10);

        return view('admin.articles.index', [
            'articles' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Article();

        $article = $request->validate([
           'title'=>'required',
           'description'=>'required',
           'file'=>'required',
        ],[
            'title.required'=>'Iltimos maqola nomini kiriting.',
            'description.required'=>'Iltimos qisqacha izoh yozing.',
            'file.required'=>'Iltimos maqola faylini yuklang.'
        ]);

        $data->title = $article['title'];
        $data->description = $article['description'];
        $data->category = $article['category'];

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('articles', $imagename);
        $data->file = $imagename;

        $data->save();

        return redirect()->route('admin.articles');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', [
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->description = $request->description;
        $article->category = $request->category;

        if ($request->file != null) {
            $image = $request->file;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('articles', $imagename);
            $article->file = $imagename;
        }

        $article->save();

        return redirect()->route('admin.articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles');
    }
}
