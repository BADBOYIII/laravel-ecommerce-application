<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Root',
            'description' => 'This is the root',
            'parant_id' => null,
            'menu' => 0,
        ]);

        factory('App\Models\Category', 10)->create();
    }
}