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
                'created_at' => '2023-07-16 21:10:57',
                'id' => 1,
                'name' => 'Action',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'action',
                'updated_at' => '2023-07-16 21:10:58',
            ),
            1 => 
            array (
                'created_at' => '2023-07-16 21:10:59',
                'id' => 2,
                'name' => 'Role Playing',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'role-playing',
                'updated_at' => '2023-07-16 21:10:10',
            ),
            2 => 
            array (
                'created_at' => '2023-07-16 21:10:11',
                'id' => 3,
                'name' => 'Strategy',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'strategy',
                'updated_at' => '2023-07-16 21:10:12',
            ),
            3 => 
            array (
                'created_at' => '2023-07-16 21:10:13',
                'id' => 4,
                'name' => 'Adventure',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'adventure',
                'updated_at' => '2023-07-16 21:10:14',
            ),
            4 => 
            array (
                'created_at' => '2023-07-16 21:10:15',
                'id' => 5,
                'name' => 'First Person Shooter',
                'order' => 1,
                'parent_id' => 1,
                'slug' => 'first-person-shooter',
                'updated_at' => '2023-07-21 21:38:19',
            ),
            5 => 
            array (
                'created_at' => '2023-07-16 21:10:17',
                'id' => 6,
                'name' => 'Third Person Shooter',
                'order' => 1,
                'parent_id' => 1,
                'slug' => 'third-person-shooter',
                'updated_at' => '2023-07-21 21:38:14',
            ),
            6 => 
            array (
                'created_at' => '2023-07-16 21:10:21',
                'id' => 7,
                'name' => 'Action RPG',
                'order' => 1,
                'parent_id' => 2,
                'slug' => 'action-rpg',
                'updated_at' => '2023-07-21 21:38:07',
            ),
            7 => 
            array (
                'created_at' => '2023-07-16 21:10:23',
                'id' => 8,
                'name' => 'Real Time Strategy',
                'order' => 1,
                'parent_id' => 3,
                'slug' => 'real-time-strategy',
                'updated_at' => '2023-07-21 21:37:57',
            ),
            8 => 
            array (
                'created_at' => '2023-07-16 21:10:25',
                'id' => 9,
                'name' => 'Tower Defense',
                'order' => 1,
                'parent_id' => 3,
                'slug' => 'tower-defense',
                'updated_at' => '2023-07-21 21:37:45',
            ),
            9 => 
            array (
                'created_at' => '2023-07-16 21:10:27',
                'id' => 10,
                'name' => 'Puzzle',
                'order' => 1,
                'parent_id' => 4,
                'slug' => 'puzzle',
                'updated_at' => '2023-07-21 23:16:47',
            ),
            10 => 
            array (
                'created_at' => '2023-07-16 21:10:34',
                'id' => 12,
                'name' => 'Strategy RPG',
                'order' => 1,
                'parent_id' => 2,
                'slug' => 'strategy-rpg',
                'updated_at' => '2023-07-21 21:37:11',
            ),
            11 => 
            array (
                'created_at' => '2023-07-21 23:17:41',
                'id' => 20,
                'name' => 'Tactical Hero Shooter',
                'order' => 1,
                'parent_id' => 5,
                'slug' => 'tactical-hero-shooter',
                'updated_at' => '2023-07-21 23:17:41',
            ),
            12 => 
            array (
                'created_at' => '2023-07-21 23:18:19',
                'id' => 21,
                'name' => 'Open World',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'open-world',
                'updated_at' => '2023-07-21 23:18:19',
            ),
            13 => 
            array (
                'created_at' => '2023-07-21 23:18:52',
                'id' => 22,
                'name' => 'Battle Royale',
                'order' => 1,
                'parent_id' => 6,
                'slug' => 'battle-royale',
                'updated_at' => '2023-07-21 23:19:05',
            ),
        ));
        
        
    }
}