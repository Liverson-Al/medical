<?php

namespace App\Http\Controllers\Clinic;


use App\Models\Clinic;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(Request $request, Response $response){
        $clinic = new Clinic();
        $clinic->fill($request->all());
        $clinic->saveOrFail();
        return $response->setStatusCode(201);

    }
}
