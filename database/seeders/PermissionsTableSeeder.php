<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-16 21:10:56',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2023-07-16 21:10:57',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2023-07-17 09:23:32',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2023-07-17 09:23:32',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2023-07-17 09:23:32',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2023-07-17 09:23:32',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2023-07-17 09:23:32',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            45 => 
            array (
                'id' => 51,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'created_at' => '2023-07-17 16:24:09',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'created_at' => '2023-07-17 16:24:09',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'created_at' => '2023-07-17 16:24:09',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'created_at' => '2023-07-17 16:24:09',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'created_at' => '2023-07-17 16:24:09',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            50 => 
            array (
                'id' => 66,
                'key' => 'browse_transactions',
                'table_name' => 'transactions',
                'created_at' => '2023-07-21 19:43:45',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            51 => 
            array (
                'id' => 67,
                'key' => 'read_transactions',
                'table_name' => 'transactions',
                'created_at' => '2023-07-21 19:43:45',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            52 => 
            array (
                'id' => 68,
                'key' => 'edit_transactions',
                'table_name' => 'transactions',
                'created_at' => '2023-07-21 19:43:45',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            53 => 
            array (
                'id' => 69,
                'key' => 'add_transactions',
                'table_name' => 'transactions',
                'created_at' => '2023-07-21 19:43:45',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            54 => 
            array (
                'id' => 70,
                'key' => 'delete_transactions',
                'table_name' => 'transactions',
                'created_at' => '2023-07-21 19:43:45',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            55 => 
            array (
                'id' => 71,
                'key' => 'browse_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2023-07-21 21:42:33',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            56 => 
            array (
                'id' => 72,
                'key' => 'read_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2023-07-21 21:42:33',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            57 => 
            array (
                'id' => 73,
                'key' => 'edit_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2023-07-21 21:42:33',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            58 => 
            array (
                'id' => 74,
                'key' => 'add_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2023-07-21 21:42:33',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            59 => 
            array (
                'id' => 75,
                'key' => 'delete_sub_orders',
                'table_name' => 'sub_orders',
                'created_at' => '2023-07-21 21:42:33',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            60 => 
            array (
                'id' => 76,
                'key' => 'browse_listings',
                'table_name' => 'listings',
                'created_at' => '2023-07-22 11:58:27',
                'updated_at' => '2023-07-22 11:58:27',
            ),
            61 => 
            array (
                'id' => 77,
                'key' => 'read_listings',
                'table_name' => 'listings',
                'created_at' => '2023-07-22 11:58:27',
                'updated_at' => '2023-07-22 11:58:27',
            ),
            62 => 
            array (
                'id' => 78,
                'key' => 'edit_listings',
                'table_name' => 'listings',
                'created_at' => '2023-07-22 11:58:27',
                'updated_at' => '2023-07-22 11:58:27',
            ),
            63 => 
            array (
                'id' => 79,
                'key' => 'add_listings',
                'table_name' => 'listings',
                'created_at' => '2023-07-22 11:58:27',
                'updated_at' => '2023-07-22 11:58:27',
            ),
            64 => 
            array (
                'id' => 80,
                'key' => 'delete_listings',
                'table_name' => 'listings',
                'created_at' => '2023-07-22 11:58:27',
                'updated_at' => '2023-07-22 11:58:27',
            ),
        ));
        
        
    }
}