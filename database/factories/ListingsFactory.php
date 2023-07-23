<?php

namespace Database\Factories;

use App\Models\Listings;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listings>
 */
class ListingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Listings::class;

    public function definition(): array
    {

        $faker = FakerFactory::create();

        return [
            'game_name' => $faker->sentence(2),
            'description' => $faker->sentence(15),
            'price' => $faker->numberBetween(30,300),
        ];

    }
}
