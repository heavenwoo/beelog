<?php

namespace Bee;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id',
        'user_id',
        'comment',
        'email',
        'published',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function article()
    {
        return $this->belongsTo('Bee\Article');
    }

    public static function getCommentsByArticleId($id, $paginate = 10)
    {
        return static::where('article_id', $id)->simplePaginate($paginate);
    }
}
