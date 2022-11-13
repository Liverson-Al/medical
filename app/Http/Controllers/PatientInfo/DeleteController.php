<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Models\Patientinfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke(Patientinfo $patient, Response $response){
        $patient->delete();
        return $response->setStatusCode(204);
        //return redirect()->route('patients.index');
    }
}
