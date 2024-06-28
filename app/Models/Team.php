<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function homeGames(){
        return $this->hasMany(related:'App\Models\Game', foreignKey:'home_team_id',localKey:'id');
    }

    public function awayGames(){
        return $this->hasMany(related:'App\Models\Game', foreignKey:'home_team_id',localKey:'id');
    }

    public function players(){
        return $this->hasMany(related:'App\Models\Game');
    }
}
