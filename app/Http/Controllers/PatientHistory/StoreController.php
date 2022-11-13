<?php

namespace App\Http\Controllers\PatientHistory;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientHistory\StoreRequest;
use App\Models\PatientHistory;
use App\Http\Resources\PatientHistoryResource;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Response $response){
        $patienthistory = $request->validated();
        $patienthistory = PatientHistory::create($patienthistory);
        $patienthistory->saveOrFail();
        return $response->setStatusCode(201);
    }
}
