<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Player;
use App\Models\Stats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game_id = fake()->numberBetween(int1:1, int2:12);

        $game = Game::find($game_id);

        $player_ids = Player::whereIn('team_id', [$game->home_team_id, $game->away_team_id])->pluck('id');

        $stat = fake()->randomElement(array:['1point',' 2points','3points',]);

        $num = fake()->numberBetween(int1:70, int2:100);

        for($i=0; $i<$num; $i++) {
            Stats::create([
                'game_id'    => $game_id,
                'player_id'  => fake()->randomElement(array:$player_ids),
                'type'       => $stat,
                'period'     => fake()->numberBetween(int1:1, int2: 4)
            ]);
        }
    }
}