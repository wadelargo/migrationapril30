<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;

    public function game(){
        return $this->belongsTo(related:'App\Models\Game');
    }

    public function player(){
        return $this->belongsTo(related:'App\Models\Player');
    }
}
