<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cache;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'subject',
        'published',
        'intro',
        'author',
        'keyword',
        'tags',
        'ip',
        'user_id',
        'content',
        'hit',
        'picture_url',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function users()
    {
        return $this->hasOne('App\User');
    }

    public function categories()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    public static function getNewArticles($paginate = 10)
    {
        return static::getArticles(false, $paginate);
    }

    public static function getArticles($id = false, $paginate = 10)
    {
        $select = [
            'articles.*',
            'categories.name as category_name',
            'users.name as user_name',
        ];

        $article = static::select($select)
            ->leftJoin('categories', 'categories.id', '=', 'articles.category_id')
            ->leftJoin('users', 'users.id', '=', 'articles.user_id');

        if ($id === false) {
            return $article->orderBy('articles.created_at', 'desc')
                ->orderBy('articles.id', 'desc')
                ->paginate($paginate);
        } else {
            return $article->where('articles.id', $id)->get();
        }
    }

    public static function getArticleById($id)
    {
        Cache::put('xx', 'oo', Carbon::now()->addMinutes(10));
        $find = static::find($id);
        return $find ? static::getArticles($id) : null;
    }
}
