<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;

use App\Http\Requests;

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

        $article = $article->toArray()[0];

        return view('post', compact('article'));
    }

    public function test($id)
    {
        //var_dump(Article::find($id));
        var_dump(Article::where('id', $id)->get()[0]->comments);die;
        $model = Article::has('comments')->get();
        dd($model);
    }
}