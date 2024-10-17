<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller{

    public function index(){
        return view('welcome',  ['teste' => 'ablabla']);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request) {
        $category = new Category;

        $category->name = $request->title;
        $category->description = $request->description;

        $category->save();

        return redirect('/')->with('msg', 'Categoria criado com sucesso!');
    }
}
?>