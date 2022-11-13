<?php

namespace App\Http\Controllers\ConcomDisease;

use App\Http\Controllers\Controller;

use App\Http\Requests\ConcomDisease\UpdateRequest;
use App\Http\Resources\ConcomDisease\ConcomDiseaseResource;
use App\Models\ConcomDisease;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, ConcomDisease $concomdisease){
        $data = $request->validated();
        $concomdisease->update($data);
        $concomdisease = $concomdisease->fresh();

        return new ConcomDiseaseResource($concomdisease);
    }
}
