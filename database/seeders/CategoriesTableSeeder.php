<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Action',
                'slug' => 'action',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:58',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Role Playing',
                'slug' => 'role-playing',
                'created_at' => '2023-07-16 21:10:59',
                'updated_at' => '2023-07-16 21:10:10',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Strategy',
                'slug' => 'strategy',
                'created_at' => '2023-07-16 21:10:11',
                'updated_at' => '2023-07-16 21:10:12',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Adventure',
                'slug' => 'adventure',
                'created_at' => '2023-07-16 21:10:13',
                'updated_at' => '2023-07-16 21:10:14',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 1,
                'order' => 1,
                'name' => 'First Person Shooter',
                'slug' => 'first-person-shooter',
                'created_at' => '2023-07-16 21:10:15',
                'updated_at' => '2023-07-21 21:38:19',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 1,
                'order' => 1,
                'name' => 'Third Person Shooter',
                'slug' => 'third-person-shooter',
                'created_at' => '2023-07-16 21:10:17',
                'updated_at' => '2023-07-21 21:38:14',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 1,
                'name' => 'Action RPG',
                'slug' => 'action-rpg',
                'created_at' => '2023-07-16 21:10:21',
                'updated_at' => '2023-07-21 21:38:07',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 3,
                'order' => 1,
                'name' => 'Real Time Strategy',
                'slug' => 'real-time-strategy',
                'created_at' => '2023-07-16 21:10:23',
                'updated_at' => '2023-07-21 21:37:57',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 3,
                'order' => 1,
                'name' => 'Tower Defense',
                'slug' => 'tower-defense',
                'created_at' => '2023-07-16 21:10:25',
                'updated_at' => '2023-07-21 21:37:45',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 4,
                'order' => 1,
                'name' => 'Puzzle',
                'slug' => 'puzzle',
                'created_at' => '2023-07-16 21:10:27',
                'updated_at' => '2023-07-21 23:16:47',
            ),
            10 => 
            array (
                'id' => 12,
                'parent_id' => 2,
                'order' => 1,
                'name' => 'Strategy RPG',
                'slug' => 'strategy-rpg',
                'created_at' => '2023-07-16 21:10:34',
                'updated_at' => '2023-07-21 21:37:11',
            ),
            11 => 
            array (
                'id' => 20,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'Tactical Hero Shooter',
                'slug' => 'tactical-hero-shooter',
                'created_at' => '2023-07-21 23:17:41',
                'updated_at' => '2023-07-21 23:17:41',
            ),
            12 => 
            array (
                'id' => 21,
                'parent_id' => 7,
                'order' => 1,
                'name' => 'Open World',
                'slug' => 'open-world',
                'created_at' => '2023-07-21 23:18:19',
                'updated_at' => '2023-07-21 23:18:19',
            ),
            13 => 
            array (
                'id' => 22,
                'parent_id' => 6,
                'order' => 1,
                'name' => 'Battle Royale',
                'slug' => 'battle-royale',
                'created_at' => '2023-07-21 23:18:52',
                'updated_at' => '2023-07-21 23:19:05',
            ),
        ));
        
        
    }
}