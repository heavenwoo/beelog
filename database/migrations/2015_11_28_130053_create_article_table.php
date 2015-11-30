<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('category_id');
            $table->string('subject');
            $table->string('published', 10);
            $table->string('intro');
            $table->string('author', 20);
            $table->string('keyword', 50);
            $table->string('tags');
            $table->string('ip', 15);
            $table->integer('user_id');
            $table->longText('content');
            $table->tinyInteger('hit');
            $table->string('picture_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
