<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['id', 'title', 'description', 'release_date', 'price', 'character_image', 'company_id', 'cover_image','created_at', 'updated_at']; 

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getCoverImage()
    {
        return $this->cover_image;
    }

    public function getCharacterImage()
    {
        return $this->character_image;
    }

    public function company(){
        return $this->belongsTo('App\models\Company');
    }

    public function category(){
        return $this->hasMany('App\models\Category');
    }
}