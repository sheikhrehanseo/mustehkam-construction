<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    // Clear old data
    \Illuminate\Support\Facades\DB::table('services')->truncate();

    $services = [
        [
            'title' => 'Planning',
            'description' => 'Expert architectural planning and structural design.',
            'icon' => 'fa-mountain-city',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Excavation',
            'description' => 'Professional ground preparation and site clearing.',
            'icon' => 'fa-trowel-bricks',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Design',
            'description' => 'Interior and exterior design services.',
            'icon' => 'fa-compass-drafting',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        // Add more if you like...
    ];

    \Illuminate\Support\Facades\DB::table('services')->insert($services);
    }
}
