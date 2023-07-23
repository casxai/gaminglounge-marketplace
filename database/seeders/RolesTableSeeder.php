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
                'created_at' => '2023-07-16 21:10:56',
                'display_name' => 'Administrator',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            1 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'display_name' => 'Normal User',
                'id' => 2,
                'name' => 'user',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            2 => 
            array (
                'created_at' => '2023-07-17 18:06:41',
                'display_name' => 'Seller',
                'id' => 3,
                'name' => 'seller',
                'updated_at' => '2023-07-17 18:06:41',
            ),
        ));
        
        
    }
}