<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientInfo\StoreRequest;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Models\Patientinfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Response $response){
        $patient = $request->validated();
        $patient = Patientinfo::create($patient);
        $patient->saveOrFail();
        return $response->setStatusCode(201);
    }
}
