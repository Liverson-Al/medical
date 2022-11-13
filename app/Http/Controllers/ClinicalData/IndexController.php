<?php

namespace App\Http\Controllers\ClinicalData;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClinicalData\ClinicalDataResource;
use App\Models\ClinicalData;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $clinicaldata = ClinicalData::all();
        return ClinicalDataResource::collection($clinicaldata);
    }
}
