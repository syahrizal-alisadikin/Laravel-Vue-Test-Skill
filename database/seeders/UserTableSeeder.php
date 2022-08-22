<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data roles admin
        $userCreate = User::create([
            'name'      => 'adminisrator',
            'email'     => 'admin@jti.com',
            'roles'     => 'admin',
            'password'  => bcrypt('password')
        ]);

        //create data roles user
        $userCreate = User::create([
            'name'      => 'user',
            'email'     => 'user@jti.com',
            'roles'     => 'user',
            'password'  => bcrypt('password')
        ]);
    }
}
