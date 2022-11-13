<?php

namespace App\Http\Controllers\PatientHistory;

use App\Http\Controllers\Controller;
use App\Models\PatientHistory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke(PatientHistory $patienthistory, Response $response){
        $patienthistory->delete();
        return $response->setStatusCode(204);
        //return redirect()->route('patienthistory.index');
    }
}
