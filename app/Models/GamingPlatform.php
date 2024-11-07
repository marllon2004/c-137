<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamingPlatform extends Model
{
    protected $fillable = ['id', 'name', 'created_at', 'updated_at']; 

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

}