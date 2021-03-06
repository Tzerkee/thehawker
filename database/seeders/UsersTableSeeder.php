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
                'role_id' => 1,
                'name' => 'Admin',
                'username' => NULL,
                'email' => 'thehawkermarketplace@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'default.png',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$iaqEJ4J2ds7HtVpQiRQJVuh9KclyGzqD5Xzfug2xlAlXe30OLbIze',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 07:45:40',
                'updated_at' => '2021-03-02 07:45:40',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'seller1',
                'username' => NULL,
                'email' => 'qiqi.tkee@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/male-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'seller2',
                'username' => NULL,
                'email' => 'qq.tzerkee17@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'customer1',
                'username' => NULL,
                'email' => 'tk.phang17@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-2.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'customer2',
                'username' => NULL,
                'email' => 'customer2@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-4.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 3,
                'name' => 'seller3',
                'username' => NULL,
                'email' => 'seller3@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/male-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 3,
                'name' => 'seller4',
                'username' => NULL,
                'email' => 'seller4.tkee@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/male-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 3,
                'name' => 'seller5',
                'username' => NULL,
                'email' => 'seller5@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/male-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 3,
                'name' => 'seller6',
                'username' => NULL,
                'email' => 'seller6@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/male-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 3,
                'name' => 'seller7',
                'username' => NULL,
                'email' => 'seller7@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/male-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 3,
                'name' => 'seller9',
                'username' => NULL,
                'email' => 'seller9@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/male-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 3,
                'name' => 'seller10',
                'username' => NULL,
                'email' => 'seller10@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/male-1.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 2,
                'name' => 'customer3',
                'username' => NULL,
                'email' => 'customer3@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-2.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            13 => 
            array (
                'id' => 14,
                'role_id' => 2,
                'name' => 'customer4',
                'username' => NULL,
                'email' => 'customer4@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-4.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            14 => 
            array (
                'id' => 15,
                'role_id' => 2,
                'name' => 'customer5',
                'username' => NULL,
                'email' => 'customer5@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-2.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            15 => 
            array (
                'id' => 16,
                'role_id' => 2,
                'name' => 'customer6',
                'username' => NULL,
                'email' => 'customer6@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-4.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            16 => 
            array (
                'id' => 17,
                'role_id' => 2,
                'name' => 'customer7',
                'username' => NULL,
                'email' => 'customer7@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-2.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            17 => 
            array (
                'id' => 18,
                'role_id' => 2,
                'name' => 'customer8',
                'username' => NULL,
                'email' => 'customer8@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-4.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            18 => 
            array (
                'id' => 19,
                'role_id' => 2,
                'name' => 'customer9',
                'username' => NULL,
                'email' => 'customer9@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-2.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
            19 => 
            array (
                'id' => 20,
                'role_id' => 2,
                'name' => 'customer10',
                'username' => NULL,
                'email' => 'customer10@gmail.com',
                'email_verified_at' => NULL,
                'avatar' => 'users/female-4.jpg',
                'phone' => NULL,
                'address' => NULL,
                'country' => NULL,
                'password' => '$2y$10$n25u.w0JdAfchc33PCuSaOz8C.i8.ZJNVMrX6XtQfkwWoke8zO8S.',
                'remember_token' => NULL,
                'bio' => NULL,
                'birthday' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'twitter' => NULL,
                'settings' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-03-02 08:47:28',
                'updated_at' => '2021-03-02 08:47:28',
            ),
        ));
        
        
    }
}