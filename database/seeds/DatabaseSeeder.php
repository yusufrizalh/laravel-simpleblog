<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
