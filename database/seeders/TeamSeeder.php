<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    \Illuminate\Support\Facades\DB::table('teams')->truncate();

    $team = [
        [
            'name' => 'Sheikh Rehan',
            'role' => 'Director Business Operations',
            'image' => 'assets/img/team/team-3.jpeg',
            'bio' => 'Expert in Tech & Marketing.',
            'created_at' => now(), 'updated_at' => now(),
        ],
        [
            'name' => 'Komal Princess',
            'role' => 'Rola Pany Vali',
            'image' => 'assets/img/team/team-2.jpeg',
            'bio' => 'Ensuring every project meets the timeline.',
            'created_at' => now(), 'updated_at' => now(),
        ],
        [
            'name' => 'Zunaira Suleman urf Lill Panguin',
            'role' => 'Mazdoor',
            'image' => 'assets/img/team/team-1.jpeg',
            'bio' => 'Motivator for smart buildings.',
            'created_at' => now(), 'updated_at' => now(),
        ],
    ];

    \Illuminate\Support\Facades\DB::table('teams')->insert($team);
    }
}
