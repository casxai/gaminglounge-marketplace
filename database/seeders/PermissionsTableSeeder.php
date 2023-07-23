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
                'created_at' => '2023-07-16 21:10:56',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2023-07-16 21:10:56',
            ),
            1 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2023-07-16 21:10:56',
            ),
            2 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2023-07-16 21:10:56',
            ),
            3 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2023-07-16 21:10:56',
            ),
            4 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2023-07-16 21:10:56',
            ),
            5 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            6 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            7 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            8 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            9 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            10 => 
            array (
                'created_at' => '2023-07-16 21:10:56',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            11 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            12 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            13 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            14 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            15 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            16 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            17 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            18 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            19 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            20 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            21 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            22 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            23 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            24 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            25 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            26 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            27 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            28 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            29 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            30 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            31 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            32 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            33 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            34 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            35 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            36 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            37 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            38 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            39 => 
            array (
                'created_at' => '2023-07-16 21:10:57',
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            40 => 
            array (
                'created_at' => '2023-07-17 09:23:32',
                'id' => 41,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            41 => 
            array (
                'created_at' => '2023-07-17 09:23:32',
                'id' => 42,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            42 => 
            array (
                'created_at' => '2023-07-17 09:23:32',
                'id' => 43,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            43 => 
            array (
                'created_at' => '2023-07-17 09:23:32',
                'id' => 44,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            44 => 
            array (
                'created_at' => '2023-07-17 09:23:32',
                'id' => 45,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'updated_at' => '2023-07-17 09:23:32',
            ),
            45 => 
            array (
                'created_at' => '2023-07-17 16:24:09',
                'id' => 51,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            46 => 
            array (
                'created_at' => '2023-07-17 16:24:09',
                'id' => 52,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            47 => 
            array (
                'created_at' => '2023-07-17 16:24:09',
                'id' => 53,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            48 => 
            array (
                'created_at' => '2023-07-17 16:24:09',
                'id' => 54,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            49 => 
            array (
                'created_at' => '2023-07-17 16:24:09',
                'id' => 55,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'updated_at' => '2023-07-17 16:24:09',
            ),
            50 => 
            array (
                'created_at' => '2023-07-21 19:43:45',
                'id' => 66,
                'key' => 'browse_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            51 => 
            array (
                'created_at' => '2023-07-21 19:43:45',
                'id' => 67,
                'key' => 'read_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            52 => 
            array (
                'created_at' => '2023-07-21 19:43:45',
                'id' => 68,
                'key' => 'edit_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            53 => 
            array (
                'created_at' => '2023-07-21 19:43:45',
                'id' => 69,
                'key' => 'add_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            54 => 
            array (
                'created_at' => '2023-07-21 19:43:45',
                'id' => 70,
                'key' => 'delete_transactions',
                'table_name' => 'transactions',
                'updated_at' => '2023-07-21 19:43:45',
            ),
            55 => 
            array (
                'created_at' => '2023-07-21 21:42:33',
                'id' => 71,
                'key' => 'browse_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            56 => 
            array (
                'created_at' => '2023-07-21 21:42:33',
                'id' => 72,
                'key' => 'read_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            57 => 
            array (
                'created_at' => '2023-07-21 21:42:33',
                'id' => 73,
                'key' => 'edit_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            58 => 
            array (
                'created_at' => '2023-07-21 21:42:33',
                'id' => 74,
                'key' => 'add_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            59 => 
            array (
                'created_at' => '2023-07-21 21:42:33',
                'id' => 75,
                'key' => 'delete_sub_orders',
                'table_name' => 'sub_orders',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            60 => 
            array (
                'created_at' => '2023-07-22 11:58:27',
                'id' => 76,
                'key' => 'browse_listings',
                'table_name' => 'listings',
                'updated_at' => '2023-07-22 11:58:27',
            ),
            61 => 
            array (
                'created_at' => '2023-07-22 11:58:27',
                'id' => 77,
                'key' => 'read_listings',
                'table_name' => 'listings',
                'updated_at' => '2023-07-22 11:58:27',
            ),
            62 => 
            array (
                'created_at' => '2023-07-22 11:58:27',
                'id' => 78,
                'key' => 'edit_listings',
                'table_name' => 'listings',
                'updated_at' => '2023-07-22 11:58:27',
            ),
            63 => 
            array (
                'created_at' => '2023-07-22 11:58:27',
                'id' => 79,
                'key' => 'add_listings',
                'table_name' => 'listings',
                'updated_at' => '2023-07-22 11:58:27',
            ),
            64 => 
            array (
                'created_at' => '2023-07-22 11:58:27',
                'id' => 80,
                'key' => 'delete_listings',
                'table_name' => 'listings',
                'updated_at' => '2023-07-22 11:58:27',
            ),
        ));
        
        
    }
}