<?php

namespace App\Http\Controllers\PatientInfo;

use App\Models\Patientinfo;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke($patientID, Response $response){
        $patient = Patientinfo::find($patientID);
        $patient->delete();
        return $response->setStatusCode(204);
    }
}
