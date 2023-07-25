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
                'id' => 1,
                'role_id' => 3,
                'name' => 'Customer 1',
                'email' => 'customer1@glounge.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.wGCnBP8YuX2MolTy.ETAuP43Nx1AkIo5uHGoO3O0hLudivDG5Vwe',
                'remember_token' => 'DQDMl42IIPj0wGGpYYxL7KSAyESe8LyYxTvdNC96mV87DXSKboQRXJzxM8eI',
                'settings' => NULL,
                'created_at' => '2023-07-16 16:03:39',
                'updated_at' => '2023-07-25 05:51:27',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Customer 2',
                'email' => 'customer2@glounge.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q.JgEACW5ShTs/0XjEkzpOBq7x8.ZSSWjhlkS9Da4DtvVg1/ifGo6',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-07-16 18:44:34',
                'updated_at' => '2023-07-16 18:44:34',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@glounge.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$C5i7tksXT1VPNH.8AuZm9ub/B4u4GUaBQ1ExSH4kU1ye1Hjwc9Ik.',
                'remember_token' => '5cO84a6PazmxpCBn4a9N2NsjAb0G3VlXNCXd2Iv0x3QCYQzrIFQ9Ik06mrYG',
                'settings' => NULL,
                'created_at' => '2023-07-16 19:29:21',
                'updated_at' => '2023-07-25 06:29:04',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@glounge.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ANqdhM5fTDrzKFglKyKRbe/n6itcpI8Fy023SlJSJFwAAbnxWHx0e',
                'remember_token' => 'EqqYzW39S2aXy7yGhgXv1lHpgmt7VP3XItfrbFCcyoBOhIZiGEtf2illYSwy',
                'settings' => NULL,
                'created_at' => '2023-07-16 20:16:57',
                'updated_at' => '2023-07-19 12:06:27',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@glounge.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$97spmzYCTJcgWH6o.EtAjOvYp85raRhh2uye4.ielCPzmnC57xxgq',
                'remember_token' => 'DSQt9VQzuGFapfp7lox7P5qrqGCWkVf1rjbtLomsJN6EwVIiUatdfB2OgWUl',
                'settings' => NULL,
                'created_at' => '2023-07-16 21:14:34',
                'updated_at' => '2023-07-16 21:15:44',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 3,
                'name' => 'Jennie Kim',
                'email' => 'jenniekim@glounge.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hwohGPMd55ZT4mB1HhPsEupFzELbmxaInRqgYqp/MwGto8.GAWl3.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-07-22 11:42:12',
                'updated_at' => '2023-07-22 11:48:28',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 3,
                'name' => 'roseanne park',
                'email' => 'roseanne@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rdyKqbdApWJo1T6JSvGR6.WGBxET46TVdRwh9DtAhemQeHdb5uS5.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-07-23 05:16:09',
                'updated_at' => '2023-07-23 07:32:57',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 2,
                'name' => 'lalisa manoban',
                'email' => 'lalisa@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/bd4kfY78UawJAq1LeDxpuaHL68LT5GW4qtSb3Clci4lkMHFhWKaO',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-07-23 07:53:58',
                'updated_at' => '2023-07-23 07:53:58',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 2,
                'name' => 'seller3',
                'email' => 'seller3@glounge.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RhymlVdaFxgJJcl09WwAX.suWbcg4zbKb3G.SflzMVFt9YLmTybmS',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-07-23 13:42:08',
                'updated_at' => '2023-07-23 13:42:08',
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 2,
                'name' => 'customer3',
                'email' => 'customer3@glounge.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BkYZOWnk4LFni.NryaOmC.H9NvXIFnc/mXoV7pySggtUObnzRrAQa',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-07-25 06:48:48',
                'updated_at' => '2023-07-25 07:04:51',
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 2,
                'name' => 'customer4',
                'email' => 'customer4@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hrxmtlEdryHYeAZXuLP9K.SlLIyBrulYbvtGm/y07lzwctoe0SkEq',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-07-25 06:52:54',
                'updated_at' => '2023-07-25 07:02:39',
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 2,
                'name' => 'customer5',
                'email' => 'customer5@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yhIEvUeRL2YLUVCNpD7eiej8Y1Kdb.M.Ce/l8F9DBROTRE8iuK6mi',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-07-25 07:10:10',
                'updated_at' => '2023-07-25 07:10:10',
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 3,
                'name' => 'customer6',
                'email' => 'cusomter6@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Vv6Ja9KktSd3KgHqkvmTZumXZUZaJBUojvuzq4PuicVDilTCLwwSC',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-07-25 07:12:43',
                'updated_at' => '2023-07-25 07:18:03',
            ),
        ));
        
        
    }
}