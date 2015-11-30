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

        \App\User::truncate();
        factory(\App\User::class, 20)->create();

        \App\Article::truncate();
        factory(\App\Article::class, 100)->create();

        \App\Comment::truncate();
        factory(\App\Comment::class, 20)->create();

        \App\Category::truncate();
        factory(\App\Category::class, 10)->create();

        Model::reguard();
    }
}
