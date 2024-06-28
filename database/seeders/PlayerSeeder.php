<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=4; $i++) {
            for ($j=0; $j<12; $j++) {
                Player::create([
                    'name'              => fake()->name(gender:'male'),
                    'team_id'           => $i,
                    'jersey_no'         => fake()->numberBetween(int1:0, int2:99),
                    'player_position'   =>fake()->randomElement(array:['center', 'small forward', 'power forward', 'point guard'])
                ]);
            }
        }
    }
}