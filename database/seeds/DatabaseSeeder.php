<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        factory(\App\User::class, 20)->create();

        factory(\App\Article::class, 200)->create();

        factory(\App\Comment::class, 1000)->create();

        factory(\App\Category::class, 10)->create();

        factory(\App\Tag::class, 10)->create();

        factory(\App\ArticlesTags::class, 200)->create();

        Model::reguard();
    }
}
