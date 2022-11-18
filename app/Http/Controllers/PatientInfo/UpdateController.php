<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;

use App\Http\Requests\PatientInfo\UpdateRequest;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Models\Patientinfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, $patientID, Response $response){
        $data = $request->validated();
        $patient = PatientInfo::where('id', $patientID)->update($data);
        $patient = PatientInfo::find($patientID);
        return $response->setStatusCode(202)->setContent(new PatientInfoResource($patient));
    }
}
