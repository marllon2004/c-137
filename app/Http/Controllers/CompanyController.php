<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller{

    public function index(){
        return view('welcome',  ['teste' => 'ablabla']);
    }

    public function create(){
        return view('companies.create');
    }
}
?>