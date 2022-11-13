<?php

namespace App\Http\Controllers\ConcomDisease;

use App\Http\Controllers\Controller;
use App\Http\Resources\ConcomDisease\ConcomDiseaseResource;
use App\Models\ConcomDisease;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(ConcomDisease $concomdisease){
        return new ConcomDiseaseResource($concomdisease);
        // return view('patients.edit', compact('patient'));
    }
}
