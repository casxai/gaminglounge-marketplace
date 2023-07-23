<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-16 16:03:39',
                'email' => 'customer1@glounge.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Customer 1',
                'password' => '$2y$10$.wGCnBP8YuX2MolTy.ETAuP43Nx1AkIo5uHGoO3O0hLudivDG5Vwe',
                'remember_token' => 'a0ZH3xjdHy2BVR8WipOQkhMaxG8jbDuBQWwRdyDeIGIaDljg8M0TaHAUqOR7',
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2023-07-19 11:21:56',
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-16 18:44:34',
                'email' => 'customer2@glounge.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Customer 2',
                'password' => '$2y$10$Q.JgEACW5ShTs/0XjEkzpOBq7x8.ZSSWjhlkS9Da4DtvVg1/ifGo6',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2023-07-16 18:44:34',
            ),
            2 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-16 19:29:21',
                'email' => 'seller2@glounge.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'Seller 2',
                'password' => '$2y$10$JtoMXd63gSgM/olD4LGGVuh8O8JeWDcFofuE7gj1kUrWukR4XGOVu',
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2023-07-16 19:29:21',
            ),
            3 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-16 20:16:57',
                'email' => 'seller1@glounge.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'name' => 'Seller 1',
                'password' => '$2y$10$ANqdhM5fTDrzKFglKyKRbe/n6itcpI8Fy023SlJSJFwAAbnxWHx0e',
                'remember_token' => 'qsgHzWIxwjBFj5wMxh6ShhtN2h3JrUf3xdoJEt86S7Bm4XUmuetjK40XqJRA',
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2023-07-19 12:06:27',
            ),
            4 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-16 21:14:34',
                'email' => 'admin@glounge.com',
                'email_verified_at' => NULL,
                'id' => 5,
                'name' => 'admin',
                'password' => '$2y$10$97spmzYCTJcgWH6o.EtAjOvYp85raRhh2uye4.ielCPzmnC57xxgq',
                'remember_token' => 'DSQt9VQzuGFapfp7lox7P5qrqGCWkVf1rjbtLomsJN6EwVIiUatdfB2OgWUl',
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2023-07-16 21:15:44',
            ),
            5 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-22 11:42:12',
                'email' => 'jenniekim@glounge.com',
                'email_verified_at' => NULL,
                'id' => 6,
                'name' => 'Jennie Kim',
                'password' => '$2y$10$hwohGPMd55ZT4mB1HhPsEupFzELbmxaInRqgYqp/MwGto8.GAWl3.',
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => NULL,
                'updated_at' => '2023-07-22 11:48:28',
            ),
            6 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-23 05:16:09',
                'email' => 'roseanne@gmail.com',
                'email_verified_at' => NULL,
                'id' => 7,
                'name' => 'roseanne park',
                'password' => '$2y$10$rdyKqbdApWJo1T6JSvGR6.WGBxET46TVdRwh9DtAhemQeHdb5uS5.',
                'remember_token' => NULL,
                'role_id' => 2,
                'settings' => NULL,
                'updated_at' => '2023-07-23 05:16:09',
            ),
        ));
        
        
    }
}