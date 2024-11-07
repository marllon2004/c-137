<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\GamingPlatform;

class GamingPlatformService
{
    public function getGamingPlatforms(){
        $gamingPlatforms = GamingPlatform::all();

        return $gamingPlatforms;
    }
}
