<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperSmashBros extends Model
{
    protected $fillable = [
        'id',
        'player_id',
        'year',
        'placing',
        'result',
        'points',
        'created_at',
        'updated_at'
    ];

    public function player() {
        return $this->belongsTo(Player::class);
    }
}
