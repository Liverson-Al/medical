<?php

namespace App\Http\Controllers\Echocardiography;

use App\Http\Controllers\Controller;
use App\Http\Requests\Echocardiography\StoreRequest;
use App\Models\Echocardiography;
use App\Http\Resources\EchocardiographyResource;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Response $response){
        $echocardiography = $request->validated();
        $echocardiography = Echocardiography::create($echocardiography);
        $echocardiography->saveOrFail();
        return $response->setStatusCode(201);
    }
}
