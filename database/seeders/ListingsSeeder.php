<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Listings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListingsSeeder extends Seeder
{

    public function run(): void
    {

        // Get all users with the "seller" role (assuming "seller" role has id 3)
        $sellers = User::where('role_id', 3)->get();

        // Create listings for each seller
            $sellers->each(function ($seller) {
            Listings::factory()->count(30)->create(['shop_id' => $seller->shop->id]);

        });
    }
}
