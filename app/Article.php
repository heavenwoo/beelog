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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function users()
    {
        return $this->hasOne('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categories()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    /**
     * @param int $paginate
     * @return object
     */
    public static function getNewArticles($paginate = 10)
    {
        return static::getArticles(0, $paginate);
    }

    /**
     * @param bool|false $id
     * @param int        $paginate
     * @return object
     */
    public static function getArticles($id = 0, $paginate = 10)
    {
        $select = [
            'articles.*',
            'categories.name as category_name',
            'users.name as user_name',
        ];

        $article = static::select($select)
            ->leftJoin('categories', 'categories.id', '=', 'articles.category_id')
            ->leftJoin('users', 'users.id', '=', 'articles.user_id');

        if ($id === 0) {
            return $article->orderBy('articles.created_at', 'desc')
                ->orderBy('articles.id', 'desc')
                ->paginate($paginate);
        } else {
            return $article->where('articles.id', $id)->get();
        }
    }

    /**
     * @param $id
     * @return object|null
     */
    public static function getArticleById($id)
    {
        Cache::put('xx', 'oo', Carbon::now()->addMinutes(10));
        $find = static::find($id);
        return $find ? static::getArticles($id) : null;
    }
}
