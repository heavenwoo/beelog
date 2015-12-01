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
    public function user()
    {
        return $this->belongsTo('App\User');
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
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * @param int $paginate
     * @return object
     */
    public static function getNewArticles($paginate = 10)
    {
        return static::with('category', 'user', 'tags')
            ->where('published', 'published')
            ->orderBy('created_at', 'desc')
            ->simplePaginate($paginate);
    }

    /**
     * @param $id
     * @return object|null
     */
    public static function getArticleById($id)
    {
        return static::findOrFail($id)->load('user', 'comments');
    }
}
