<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'name' => 'Team A',
                'remarks' => 'This is Team A',
                'owner' => 'John Doe',
                'head_coach' => 'Coach Smith',
            ],
            [
                'name' => 'Team B',
                'remarks' => 'Team B for the win!',
                'owner' => 'Jane Doe',
                'head_coach' => 'Coach Johnson',
            ],
            [
                'name' => 'Team C',
                'remarks' => 'Exciting times ahead with Team C',
                'owner' => 'Michael Smith',
                'head_coach' => 'Coach Williams',
            ],
            [
                'name' => 'Team D',
                'remarks' => 'Team D ready to dominate',
                'owner' => 'Sarah Johnson',
                'head_coach' => 'Coach Anderson',
            ],
        ];

        // Loop through the teams array and insert each entry into the 'teams' table
        foreach ($teams as $teamData) {
            Team::create($teamData);
        }
    }
}
