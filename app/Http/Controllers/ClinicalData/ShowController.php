<?php

namespace App\Http\Controllers\ClinicalData;

use App\Http\Controllers\Controller;
use App\Models\ClinicalData;
use All\Http\Resources\ClinicalDataResource;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(ClinicalData $clinicaldata){
        return new ClinicalDataResource($clinicaldata);
        //return view('patients.show', compact('patient'));
    }
}
