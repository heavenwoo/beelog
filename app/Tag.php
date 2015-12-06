<?php

namespace Bee;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag_name',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany('Bee\Article');
    }

    public static function getTags()
    {
        return static::lists('name', 'id');
    }

    public static function getArticlesByTagId($id, $paginate = 5)
    {
        return static::with('articles')
            ->where('id', $id)
            ->paginate($paginate);
    }
}
