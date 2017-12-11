<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function showAll() {
        $players = Player::all();
        return response()->json($players);
    }
}
