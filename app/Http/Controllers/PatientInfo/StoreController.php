<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientInfo\StoreRequest;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Models\Patientinfo;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        $patient = $request->validated();
        $patient = Patientinfo::create($patient);
        return new PatientInfoResource($patient);
    }
}
