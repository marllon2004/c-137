<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Company;

class CompanyService
{
    public function getCompanies(){
        $companies = Company::select('id', 'name')->get();

        return $companies;
    }
}
