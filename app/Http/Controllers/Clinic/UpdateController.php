<?php

namespace App\Http\Controllers\Clinic;

use App\Http\Resources\Clinic\ClinicResource;
use App\Models\Clinic;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(Request $request, $clinicID, Response $response){
        $clinic = Clinic::where("id", $clinicID)->update($request->all());
        $clinic = Clinic::find($clinicID);
        return $response->setStatusCode(202)->setContent(new ClinicResource($clinic));


    }
}
