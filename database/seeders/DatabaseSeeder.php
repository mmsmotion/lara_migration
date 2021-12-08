<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         Category::factory(5)->create();
         Article::factory(100)->create();
         Photo::factory(120)->create();
    }
}
