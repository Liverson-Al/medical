<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientInfo\PatientInfoRaceResource;
use App\Http\Resources\PatientInfo\PatientInfoRaceZGLResource;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Models\PatientInfo;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke($patientID){
        $patient = PatientInfo::find($patientID);
        return new PatientInfoRaceResource($patient);
    }
}
