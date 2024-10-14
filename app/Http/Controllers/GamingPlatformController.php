<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamingPlatformController extends Controller{

    public function index(){
        return view('welcome',  ['teste' => 'ablabla']);
    }

    public function create(){
        return view('platforms.create');
    }
}
?>