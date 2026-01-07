<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    \Illuminate\Support\Facades\DB::table('blogs')->truncate();

    $blogs = [
        [
            'title' => 'Eum ad dolor et. Autem aut fugiat debitis',
            'category' => 'Politics',
            'author' => 'Julia Parker',
            'image' => 'assets/img/blog/blog-1.jpg',
            'post_date' => '2025-12-12',
            'created_at' => now(), 'updated_at' => now(),
        ],
        [
            'title' => 'Et repellendus molestiae qui est sed omnis',
            'category' => 'Sports',
            'author' => 'Mario Douglas',
            'image' => 'assets/img/blog/blog-2.jpg',
            'post_date' => '2025-07-17',
            'created_at' => now(), 'updated_at' => now(),
        ],
        [
            'title' => 'Quia assumenda est et veritati tirana ploder',
            'category' => 'Economics',
            'author' => 'Lisa Hunter',
            'image' => 'assets/img/blog/blog-3.jpg',
            'post_date' => '2025-09-05',
            'created_at' => now(), 'updated_at' => now(),
        ],
    ];

    \Illuminate\Support\Facades\DB::table('blogs')->insert($blogs);
    }
}
