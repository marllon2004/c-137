<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Game;

class GameService
{
    public function getGames(){
        $games = Game::all();

        return $games;
    }

    public function getLastFiveGames(){
        $games = Game::orderByDesc('id')->take(5)->get();

        return $games;
    }
}
