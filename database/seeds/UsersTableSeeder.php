<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Yusuf Rizal',
            'username' => 'rizal2022',
            'password' => bcrypt('Pa$$w0rd'),
            'email' => 'yusufrizal@email.com',
        ]);
    }
}
