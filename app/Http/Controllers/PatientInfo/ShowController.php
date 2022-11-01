<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Models\Patientinfo;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Patientinfo $patient){
        return new PatientInfoResource($patient);
        //return view('patients.show', compact('patient'));
    }
}
