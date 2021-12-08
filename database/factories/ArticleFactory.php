<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->word();
        $slug = Str::slug($title);
        $description = $this->faker->realText();
        $excerpt = Str::words($description,50,"....");

        return [
            "title" => $title,
            "description" => $description,
            "slug" => $slug,
            "excerpt" => $excerpt,
            "user_id" => User::all()->random()->id,
            "category_id" => Category::all()->random()->id,
            "is_publish" => rand(0,1)
        ];
    }
}
