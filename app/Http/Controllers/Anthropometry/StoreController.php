<?php

namespace App\Http\Controllers\Anthropometry;

use App\Http\Controllers\Controller;
use App\Http\Requests\Anthropometry\StoreRequest;
use App\Models\Anthropometry;
use App\Http\Resources\AnthropometryResource\AnthropometryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Response $response){
        $anthropometry = $request->validated();
        $anthropometry = Anthropometry::create($anthropometry);
        $anthropometry->saveOrFail();
        return $response->setStatusCode(201);

    }
}
