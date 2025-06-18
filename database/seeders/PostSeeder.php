<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => '测试文章 1',
            'body' => '这是第一篇测试文章内容。',
        ]);

        Post::create([
            'title' => '测试文章 2',
            'body' => '这是第二篇测试文章内容。',
        ]);
    }
}
