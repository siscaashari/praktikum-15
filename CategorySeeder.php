<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $teknologi = Category::create(['name' => 'Teknologi']);
        $pendidikan = Category::create(['name' => 'Pendidikan']);

        Post::create([
            'title' => 'Belajar Laravel',
            'content' => 'Laravel adalah framework PHP yang populer.',
            'category_id' => $teknologi->id,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Tips Belajar Coding',
            'content' => 'Kunci sukses belajar coding adalah konsisten.',
            'category_id' => $pendidikan->id,
            'user_id' => 1,
        ]);
    }
}