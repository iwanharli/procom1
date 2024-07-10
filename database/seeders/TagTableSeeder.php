<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Berita Terbaru',
            'slug' => 'berita-terbaru'
        ]);

        Tag::create([
            'name' => 'Berita Teknologi',
            'slug' => 'berita-teknologi'
        ]);
    }
}
