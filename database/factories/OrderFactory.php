<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Partnership;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');
        return [
            'type_id'           => fake()->numberBetween(1, 3),
            'partnership_id'    => Partnership::factory(),
            'user_id'           => User::first(),
            'description'       => $faker->sentence(),
            'date'              => \Carbon\Carbon::now()->addDays(fake()->numberBetween(1,10))->format('Y-m-d'),
            'address'           => $faker->address(),
            'ammount'           => fake()->numberBetween(1,10) * 100000,
            'status'            => 'Создан'
        ];
    }
}
