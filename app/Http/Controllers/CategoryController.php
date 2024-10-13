<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller{

    public function index(){
        return view('welcome',  ['teste' => 'ablabla']);
    }

    public function create(){
        return view('categories.create');
    }
}
?>