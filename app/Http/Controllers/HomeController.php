<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Services\GameService;

class HomeController extends Controller{

    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    public function index(){
        $lastFiveGames = $this->gameService->getLastFiveGames();

        return view('welcome',  ['lastFiveGames' => $lastFiveGames]);
    }
}
?>