<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Models\Patientinfo;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $patients = Patientinfo::all();
        return PatientInfoResource::collection($patients);
    }
}
