<?php

namespace Bee\Http\Controllers;

use Bee\Article;
use Bee\Tag;
use Bee\User;
use GrahamCampbell\Markdown\Facades\Markdown;

use Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::getNewArticles(config('blog.posts_per_page'));

        //Fix the Flat UI pagination issue.
        $paginate = $articles->render();
        //$paginate = preg_replace('/<li(.+?)><span>&laquo;<\/span><\/li>/i', '<li class="previous disabled"><span class="fui-arrow-left"></span></li>', $paginate);
        //$paginate = preg_replace('/<li><a href="(.+?)"(.+?)>&laquo;<\/a><\/li>/i', '<li class="previous"><a href="$1" class="fui-arrow-left"></a></li>', $paginate);
        //$paginate = preg_replace('/<li(.+?)><span>&raquo;<\/span><\/li>/i', '<li class="next disabled"><span class="fui-arrow-right"></span></li>', $paginate);
        //$paginate = preg_replace('/<li><a href="(.+?)"(.+?)>&raquo;<\/a><\/li>/i', '<li class="next"><a href="$1" class="fui-arrow-right"></a></li>', $paginate);
        //$paginate = preg_replace('/>[ ]*<li/i', '>
        //<li', $paginate);
        $paginate = preg_replace('/class="pagination"/i', 'class="pagination-plain"', $paginate);

        return view('index', compact('articles', 'paginate'));
    }

    public function show($id)
    {
        $article = Article::getArticleById($id);
        //$article->content = Markdown::convertToHtml($article->content);

        return view('post', compact('article'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id');

        return view('create', compact('tags'));
    }

    public function store()
    {
        Markdown::convertToHtml('foo');
        dd(Request::all());
    }

    public function tag($id)
    {
        $articles = Article::getArticlesbyTagId($id, config('blog.posts_per_page'));

        //Fix the Flat UI pagination issue.
        $paginate = $articles->render();
        //$paginate = preg_replace('/<li(.+?)><span>&laquo;<\/span><\/li>/i', '<li class="previous disabled"><span class="fui-arrow-left"></span></li>', $paginate);
        //$paginate = preg_replace('/<li><a href="(.+?)"(.+?)>&laquo;<\/a><\/li>/i', '<li class="previous"><a href="$1" class="fui-arrow-left"></a></li>', $paginate);
        //$paginate = preg_replace('/<li(.+?)><span>&raquo;<\/span><\/li>/i', '<li class="next disabled"><span class="fui-arrow-right"></span></li>', $paginate);
        //$paginate = preg_replace('/<li><a href="(.+?)"(.+?)>&raquo;<\/a><\/li>/i', '<li class="next"><a href="$1" class="fui-arrow-right"></a></li>', $paginate);
        //$paginate = preg_replace('/>[ ]*<li/i', '>
        //<li', $paginate);
        $paginate = preg_replace('/class="pagination"/i', 'class="pagination-plain"', $paginate);

        return view('tag', compact('articles', 'paginate'));
    }

    public function test($id)
    {
        //var_dump(Article::find($id));
        dd(User::getArticles($id));
    }
}