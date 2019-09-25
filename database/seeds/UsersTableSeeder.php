<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$UydNprU9BLJJoqpsahPh2uWqZ.4ysnNG4myGKBVI1r0GXRcYvpgH6',
                'remember_token' => null,
                'created_at'     => '2019-09-25 10:06:24',
                'updated_at'     => '2019-09-25 10:06:24',
            ],
        ];

        User::insert($users);
    }
}
