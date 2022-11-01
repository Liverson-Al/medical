<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Models\Patientinfo;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Patientinfo $patient){
        $patient->delete();
        return redirect()->route('patients.index');
    }
}
