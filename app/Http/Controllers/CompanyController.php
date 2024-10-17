<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller{

    public function index(){
        return view('welcome',  ['teste' => 'ablabla']);
    }

    public function create(){
        return view('companies.create');
    }

    public function store(Request $request) {
        $company = new Company;

        $company->name = $request->title;
        $company->cnpj = $request->cnpj;
        $company->foundation = $request->foundation;
        $company->description = $request->description;

        $company->save();

        return redirect('/')->with('msg', 'Empresa criada com sucesso!');
    }
}
?>