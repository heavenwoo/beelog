<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlesTags extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'article_tag';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id',
        'tag_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
