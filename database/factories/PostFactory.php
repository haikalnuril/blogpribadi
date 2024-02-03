<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post::class>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt'=> $this->faker-> paragraph(),
            'body'=> collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(function($p){
                            return "<p>$p</p>";
                        })
                        ->implode(''),
            'category_id'=> mt_rand(1,2),
            'user_id'=>mt_rand(1,5)
        ];
    }
}
