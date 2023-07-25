<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'seller',
                'display_name' => 'Seller',
                'created_at' => '2023-07-17 18:06:41',
                'updated_at' => '2023-07-17 18:06:41',
            ),
        ));
        
        
    }
}