<?php

namespace App\Http\Controllers\PatientHistory;

use App\Http\Controllers\Controller;
use All\Http\Resources\PatientHistoryResource;
use App\Models\PatientHistory;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(PatientHistory $patienthistory){
        return new PatientHistoryResource($patienthistory);
        // return view('patients.edit', compact('patient'));
    }
}
