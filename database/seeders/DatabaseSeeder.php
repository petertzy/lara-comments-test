<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret123'),
        ]);

        Post::create([
            'title' => 'Test Post 1',
            'body' => 'This is the content of the first test post.',
        ]);

        Post::create([
            'title' => 'Test Post 2',
            'body' => 'This is the content of the second test post.',
        ]);
    }
}
