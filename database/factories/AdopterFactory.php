<?php

namespace Database\Factories;

use App\Models\Adopter;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdopterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adopter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = ['male', 'female'];

        return [
            'name' => $this->faker->name,
            'gender' => $gender[array_rand($gender)],
            'phone_number' => "+628".mt_rand(0000000000, 9999999999),
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address(),
        ];
    }
}
