<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \Illuminate\Support\Facades\DB::table('projects')->truncate();

    $projects = [
        [
            'title' => 'Luxury Villa',
            'category' => 'remodeling', // Matches HTML class .filter-remodeling
            'image_path' => 'assets/img/projects/remodeling-1.jpg',
            'created_at' => now(), 'updated_at' => now(),
        ],
        [
            'title' => 'City Skyscraper',
            'category' => 'construction', // Matches .filter-construction
            'image_path' => 'assets/img/projects/construction-1.jpg',
            'created_at' => now(), 'updated_at' => now(),
        ],
        [
            'title' => 'Old House Fix',
            'category' => 'repairs', // Matches .filter-repairs
            'image_path' => 'assets/img/projects/repairs-1.jpg',
            'created_at' => now(), 'updated_at' => now(),
        ],
        [
            'title' => 'Interior Plan',
            'category' => 'design', // Matches .filter-design
            'image_path' => 'assets/img/projects/design-1.jpg',
            'created_at' => now(), 'updated_at' => now(),
        ],
    ];

    \Illuminate\Support\Facades\DB::table('projects')->insert($projects);
}
}
