<?php

namespace App\Http\Controllers\Clinic;


use App\Http\Resources\Clinic\ClinicResource;
use App\Models\Clinic;

class IndexController extends BaseController
{
    public function __invoke(){
        $clinic = Clinic::all();
        return ClinicResource::collection($clinic);
    }
}
