<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo('App\models\Company');
    }

    public function category(){
        return $this->hasMany('App\models\Category');
    }
}