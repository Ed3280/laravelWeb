<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "login" => $this->faker->userName,
            "password" => "12345",
            "name" => $this->faker->word,
            "lastname" => $this->faker->word,
            "email" => $this->faker->unique()->safeEmail,
            "active" => true,
            "created" => now()
        ];
    }
}
