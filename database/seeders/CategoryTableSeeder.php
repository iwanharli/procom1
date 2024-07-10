<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);

        Category::create([
            'name' => 'Internet',
            'slug' => 'internet'
        ]);

        Category::create([
            'name' => 'Gadget',
            'slug' => 'gadget'
        ]);

        Category::create([
            'name' => 'Sains',
            'slug' => 'sains'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Category::create([
            'name' => 'Tutorial',
            'slug' => 'tutorial'
        ]);
    }
}
