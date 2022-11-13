<?php

namespace App\Http\Controllers\PatientHistory;

use App\Http\Controllers\Controller;
use App\Models\PatientHistory;
use All\Http\Resources\PatientHistoryResource;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(PatientHistory $patienthistory){
        return new PatientHistoryResource($patienthistory);
        //return view('patients.show', compact('patient'));
    }
}
