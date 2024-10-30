<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['id', 'name', 'cnpj', 'foundation', 'description', 'created_at', 'updated_at']; 

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

}