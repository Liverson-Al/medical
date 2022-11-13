<?php

namespace App\Http\Controllers\ClinicalData;

use App\Http\Controllers\Controller;

use App\Http\Requests\ClinicalData\UpdateRequest;
use App\Models\ClinicalData;
use App\Http\Resources\ClinicalData\ClinicalDataResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, ClinicalData $clinicaldata, Response $response){
        $data = $request->validated();
        $clinicaldata->update($data);
        $clinicaldata = $clinicaldata->fresh();
        return $response->setStatusCode(202)->setContent(new ClinicalDataResource($clinicaldata));
    }
}
