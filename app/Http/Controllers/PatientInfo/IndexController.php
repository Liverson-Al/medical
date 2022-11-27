<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientInfo\PatientInfoRaceResource;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Http\Resources\PatientInfo\PatientInfoZGLResource;
use App\Models\PatientInfo;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $patients = PatientInfo::all();
        //return PatientInfoZGLResource::collection($patients);
        return PatientInfoResource::collection($patients);
    }
}
