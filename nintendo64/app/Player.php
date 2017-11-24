<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
      'id',
      'first_name',
      'last_name',
      'characters',
      'additional_info',
      'created_at',
      'updated_at'
    ];

    public function marioKart() {
        return $this->hasMany(MarioKart::class);
    }

    public function superSmashBros() {
        return $this->hasMany(SuperSmashBros::class);
    }

    public function marioParty() {
        return $this->hasMany(MarioParty::class);
    }

    public function goldenEye() {
        return $this->hasMany(GoldenEye::class);
    }

    public function total () {
        return $this->hasMany(Total::class);
    }
}
