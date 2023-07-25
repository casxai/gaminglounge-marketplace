<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Models\Listings;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingsFactory extends Factory
{
    protected $model = Listings::class;
    public function definition(): array
    {
        $faker = FakerFactory::create();

        // Sample game names
        $gameNames = [
            'Fortnite',
            'Apex Legends',
            'Call of Duty: Mobile',
            'Minecraft',
            'League of Legends',
            'Valorant',
            'Farlight 84'
        ];

        // Sample image names (modify as needed)
        $imagePaths = [
            'listings\July2023\image1.jpg',
            'listings\July2023\image2.jpg',
            'listings\July2023\image3.jpg',
            'listings\July2023\image4.jpg',
            'listings\July2023\image5.jpg',
            'listings\July2023\image6.jpg',

        ];

        return [
            'game_name' => $faker->randomElement($gameNames),
            'description' => $faker->sentence(20),
            'price' => $faker->numberBetween(10, 100),
            'account_username' => $faker->userName,
            'account_password' => $faker->password(10),
            'images' => json_encode($imagePaths),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Listings $listing) {
            $categories = Category::pluck('id')->all();

            // Get a random category ID for the listing
            $randomCategoryId = $this->faker->randomElement($categories);

            // Attach the category ID to the listing
            $listing->categories()->attach($randomCategoryId);
        });
    }

}
