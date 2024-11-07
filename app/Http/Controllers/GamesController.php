<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Services\GameService;
use App\Services\CompanyService;
use App\Services\CategoryService;
use App\Services\GamingPlatformService;

class GamesController extends Controller{

    protected $gameService;

    protected $companyService;

    protected $categoryService;

    protected $gamingPlatformService;

    public function __construct(GameService $gameService, CompanyService $companyService, CategoryService $categoryService, GamingPlatformService $gamingPlatformService)
    {
        $this->gameService = $gameService;
        $this->companyService = $companyService;
        $this->categoryService = $categoryService;
        $this->gamingPlatformService = $gamingPlatformService;
    }

    public function index(){
        $games = $this->gameService->getGames();

        return view('games.dashboard',  ['games' => $games]);
    }

    public function create(){
        $companies = $this->companyService->getCompanies();
        $categories = $this->categoryService->getCategories();
        $gamingPlatforms = $this->gamingPlatformService->getGamingPlatforms();
    
        return view('games.create', ['companies' => $companies, 'categories' => $categories, 'gamingPlatforms' => $gamingPlatforms]);
    }

    public function store(Request $request) {
        $game = new Game;

        $game->title = $request->title;
        $game->cover_image = 'xadrez';
        $game->character_image = 'xadrez';
        $game->release_date = $request->release_date;
        $game->company_id = $request->company;
        $game->price = $request->price;
        $game->description = $request->description;

        if($request->hasFile('cover_image') && $request->file('cover_image')->isValid()){
            $requestImage = $request->cover_image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img'), $imageName);

            $game->cover_image = $imageName;
        }

        if($request->hasFile('character_image') && $request->file('character_image')->isValid()){
            $requestImage = $request->character_image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img'), $imageName);

            $game->character_image = $imageName;
        }
        $game->save();

        return redirect('/')->with('msg', 'Jogo criado com sucesso!');
    }
}
?>