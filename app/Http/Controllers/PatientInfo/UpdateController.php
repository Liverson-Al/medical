<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;

use App\Http\Requests\PatientInfo\UpdateRequest;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Models\Patientinfo;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Patientinfo $patient){
        $data = $request->validated();
        $patient->update($data);
        $patient = $patient->fresh();

        return new PatientInfoResource($patient);
    }
}
