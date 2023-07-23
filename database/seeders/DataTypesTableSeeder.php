<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2023-07-16 21:10:56',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2023-07-16 21:10:56',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2023-07-16 21:10:56',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2023-07-16 21:10:56',
            ),
            3 => 
            array (
                'controller' => '',
                'created_at' => '2023-07-16 21:10:57',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Categories',
                'display_name_singular' => 'Category',
                'generate_permissions' => 1,
                'icon' => 'voyager-categories',
                'id' => 4,
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'name' => 'categories',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'categories',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            4 => 
            array (
                'controller' => '',
                'created_at' => '2023-07-16 21:10:57',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Posts',
                'display_name_singular' => 'Post',
                'generate_permissions' => 1,
                'icon' => 'voyager-news',
                'id' => 5,
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'name' => 'posts',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'server_side' => 0,
                'slug' => 'posts',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            5 => 
            array (
                'controller' => '',
                'created_at' => '2023-07-16 21:10:57',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Pages',
                'display_name_singular' => 'Page',
                'generate_permissions' => 1,
                'icon' => 'voyager-file-text',
                'id' => 6,
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'name' => 'pages',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'pages',
                'updated_at' => '2023-07-16 21:10:57',
            ),
            6 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-07-17 09:23:32',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Orders',
                'display_name_singular' => 'Order',
                'generate_permissions' => 1,
                'icon' => 'voyager-buy',
                'id' => 8,
                'model_name' => 'App\\Models\\Order',
                'name' => 'orders',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'orders',
                'updated_at' => '2023-07-23 02:48:33',
            ),
            7 => 
            array (
                'controller' => 'App\\Http\\Controllers\\Admin\\ShopController',
                'created_at' => '2023-07-17 16:24:09',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Shops',
                'display_name_singular' => 'Shop',
                'generate_permissions' => 1,
                'icon' => 'voyager-shop',
                'id' => 12,
                'model_name' => 'App\\Models\\Shop',
                'name' => 'shops',
                'policy_name' => '\\App\\Policies\\ShopPolicy',
                'server_side' => 0,
                'slug' => 'shops',
                'updated_at' => '2023-07-22 00:09:25',
            ),
            8 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-07-22 16:26:09',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Transactions',
                'display_name_singular' => 'Transaction',
                'generate_permissions' => 1,
                'icon' => 'voyager-shop',
                'id' => 13,
                'model_name' => 'App\\Models\\Transaction',
                'name' => 'transactions',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'transactions',
                'updated_at' => '2023-07-21 20:58:01',
            ),
            9 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-07-24 18:03:17',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Sub Orders',
                'display_name_singular' => 'Sub Order',
                'generate_permissions' => 1,
                'icon' => NULL,
                'id' => 14,
                'model_name' => 'App\\Models\\SubOrder',
                'name' => 'sub_orders',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'sub-orders',
                'updated_at' => '2023-07-21 21:42:33',
            ),
            10 => 
            array (
                'controller' => 'App\\Http\\Controllers\\Admin\\ListingsController',
                'created_at' => '2023-07-22 11:58:27',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Listings',
                'display_name_singular' => 'Listing',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 24,
                'model_name' => 'App\\Models\\Listings',
                'name' => 'listings',
                'policy_name' => 'App\\Policies\\ListingsPolicy',
                'server_side' => 0,
                'slug' => 'listings',
                'updated_at' => '2023-07-22 17:42:30',
            ),
        ));
        
        
    }
}