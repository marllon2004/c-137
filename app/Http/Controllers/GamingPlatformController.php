<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GamingPlatform;

class GamingPlatformController extends Controller{

    public function index(){
        return view('welcome',  ['teste' => 'ablabla']);
    }

    public function create(){
        return view('platforms.create');
    }

    public function store(Request $request) {
        $platform = new GamingPlatform;

        $platform->name = $request->title;

        $platform->save();

        return redirect('/')->with('msg', 'Plataforma criada com sucesso!');
    }
}
?>