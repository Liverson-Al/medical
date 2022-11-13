<?php

namespace App\Http\Controllers\ConcomDisease;

use App\Http\Controllers\Controller;
use App\Models\ConcomDisease;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(ConcomDisease $concomdisease){
        return new ConcomDiseaseResource($concomdisease);
        //return view('patients.show', compact('patient'));
    }
}
