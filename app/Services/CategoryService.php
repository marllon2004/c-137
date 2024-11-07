<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryService
{
    public function getCategories(){
        $categories = Category::all();

        return $categories;
    }
}
