<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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


    public function create()
    {
        return view('admin.articles.create');
    }


    public function store(Request $request)
    {
        $data = new Article();
        $article = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category'=> 'required',
            'file' => 'required',
        ], [
            'title.required' => 'Iltimos maqola nomini kiriting.',
            'description.required' => 'Iltimos qisqacha izoh yozing.',
            'file.required' => 'Iltimos maqola faylini yuklang.'
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


    public function edit(Article $article)
    {
        return view('admin.articles.edit', [
            'article' => $article
        ]);
    }


    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->description = $request->description;
        $article->category = $request->category;

        if ($request->file != null) {

            $image_path = public_path("articles/{$article->file}");

            if (Article::exists($image_path)) {
                File::delete($image_path);
//            unlink($image_path);
            }

            $image = $request->file;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('articles', $imagename);
            $article->file = $imagename;
        }

        $article->save();

        return redirect()->route('admin.articles');
    }


    public function destroy(Article $article)
    {
//        if (isset($article->file)){
//            Storage::delete($article->file);
//        }

        $image_path = public_path("articles/{$article->file}");
        if (Article::exists($image_path)) {
            File::delete($image_path);
//            unlink($image_path);
        }

        $article->delete();
        return redirect()->route('admin.articles');
    }
}
