<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = collect(['PHP', 'Framework', 'Laravel', 'HTML', 'CSS', 'JavaScript']);
        $categories->each(function ($c) {
            Category::create([
                'name' => $c,
                'slug' => \Str::slug($c),
            ]);
        });
    }
}
