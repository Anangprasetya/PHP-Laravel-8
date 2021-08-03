<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(10, 25)),
            // 'body' => $this->faker->paragraph(mt_rand(5, 10)),
            // 'body' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            // 'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function ($p) {
            //     return "<p>$p</p>";
            // }),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
