<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listings;

class ListingsSeeder extends Seeder
{

    public function run(): void
    {
        Listings::factory()->count(20)->create();
    }
}
