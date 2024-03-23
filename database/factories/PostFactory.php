<?php

namespace Database\Factories;

use App\Models\{Admin, Post, User};
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
            'title'=> substr($this->faker->text(30), 0, -1),
            'description'=> $this->faker->paragraphs(rand(5, 7), true),
            'users_id' => User::all()->random()->id,
            'status' => collect([1, 2])->random(),
        ];
    }
}
