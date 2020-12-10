<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->simplePaginate(5);
        $data = [
            'title' => 'List Article',
            'articles' => $articles
        ];
        return view('article.index', $data);
    }

    public function show($title)
    {
        $article = Article::where('title', $title)->first();
        $data = [
            'title' => 'Detail Artikel',
            'isi' => $article
        ];
        return view('article.detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Artikel baru'
        ];
        return view('article.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:3',
            'subject' => 'required|min:10',
        ]);


        Article::create([
            'title' => $request->title,
            'subject' => $request->subject
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        $data = [
            'title' => 'Edit artikel',
            'isi' => $article
        ];
        return view('article.edit', $data);
    }

    public function update(Request $request, $id)
    {
        Article::find($id)->update([
            'title' => $request->title,
            'subject' => $request->subject
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('/');
    }
}
