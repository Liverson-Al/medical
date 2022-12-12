<?php

namespace App\Http\Controllers\Clinic;

use App\Models\Clinic;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke($clinicID, Response $response){
        $clinic = Clinic::find($clinicID);
        $clinic->delete();
        return $response->setStatusCode(204);
    }
}
