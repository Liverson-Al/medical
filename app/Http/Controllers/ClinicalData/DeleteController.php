<?php

namespace App\Http\Controllers\ClinicalData;

use App\Http\Controllers\Controller;
use App\Models\ClinicalData;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(ClinicalData $clinicaldata, Response $response){
        $clinicaldata->delete();
        return $response->setStatusCode(204);
        //return redirect()->route('clinicaldata.index');
    }
}
