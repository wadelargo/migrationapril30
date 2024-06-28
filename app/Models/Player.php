<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function stats(){
        return $this->belongsTo(related:'App\Models\Stat');
    }

    public function team(){
        return $this->belongsTo(related:'App\Models\Team');
    }
}
