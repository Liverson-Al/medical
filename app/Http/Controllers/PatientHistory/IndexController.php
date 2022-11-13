<?php

namespace App\Http\Controllers\PatientHistory;

use App\Http\Controllers\Controller;
use App\Models\PatientHistory;
use App\Http\Resources\PatientHistory\PatientHistoryResource;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $patienthistory = PatientHistory::all();
        return PatientHistoryResource::collection($patienthistory);
    }
}
