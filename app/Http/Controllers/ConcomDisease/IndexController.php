<?php

namespace App\Http\Controllers\ConcomDisease;

use App\Http\Controllers\Controller;
use App\Http\Resources\ConcomDisease\ConcomDiseaseResource;
use App\Models\ConcomDisease;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $concomdisease = ConcomDisease::all();
        return ConcomDiseaseResource::collection($concomdisease);
    }
}
