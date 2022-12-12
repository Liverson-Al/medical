<?php

namespace App\Http\Controllers\Clinic;

use App\Http\Resources\Clinic\ClinicResource;
use App\Models\Clinic;

class ShowController extends BaseController
{
    public function __invoke($userID){
        $clinic = Clinic::find($userID);
        return new ClinicResource($clinic);
    }
}
