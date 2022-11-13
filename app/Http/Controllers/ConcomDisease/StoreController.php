<?php

namespace App\Http\Controllers\ConcomDisease;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConcomDisease\StoreRequest;
use App\Http\Resources\ConcomDisease\ConcomDiseaseResource;
use App\Models\ConcomDisease;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Response $response){
        $concomdisease = $request->validated();
        $concomdisease = ConcomDisease::create($concomdisease);
        $concomdisease->saveOrFail();
        return $response->setStatusCode(201);
        //return new ConcomDiseaseResource($concomdisease);
    }
}
