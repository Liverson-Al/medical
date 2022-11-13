<?php

namespace App\Http\Controllers\ClinicalData;

use App\Http\Controllers\Controller;
use All\Http\Resources\ClinicalDataResource;
use App\Models\ClinicalData;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(ClinicalData $clinicaldata){
        // return new ClinicalDataResource($clinicaldata);
        // return view('patients.edit', compact('patient'));
    }
}
