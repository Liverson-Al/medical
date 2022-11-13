<?php

namespace App\Http\Controllers\ClinicalData;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClinicalData\StoreRequest;
use App\Models\ClinicalData;
use App\Http\Resources\ClinicalData\ClinicalDataResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Response $response){
        $clinicaldata = $request->validated();
        $clinicaldata = ClinicalData::create($clinicaldata);
        $clinicaldata->saveOrFail();
        return $response->setStatusCode(201);
    }
}
