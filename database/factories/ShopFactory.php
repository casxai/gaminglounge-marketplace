<?php

namespace Database\Factories;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Shop::class;

    public function definition()
    {
        $faker = FakerFactory::create();
        return [
            'name' => $faker->sentence(2),
            'description' => $faker->sentence(20),
            'is_active' => true
        ];
    }
}
