<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;

use Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::getNewArticles(config('blog.posts_per_page'));

        return view('index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::getArticleById($id);

        return view('post', compact('article'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        dd(Request::all());
    }

    public function test($id)
    {
        //var_dump(Article::find($id));
        var_dump(Article::where('id', $id)->get()[0]->comments);die;
        $model = Article::has('comments')->get();
        dd($model);
    }
}