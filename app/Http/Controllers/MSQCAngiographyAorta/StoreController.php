<?php

namespace App\Http\Controllers\MSQCAngiographyAorta;

use App\Http\Controllers\Controller;
use App\Http\Requests\MSQCAngiographyAorta\StoreRequest;
use App\Models\MSQCAngiographyAorta;
use App\Http\Resources\MSQCAngiographyAortaResource;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Response $response){
        $msqcangiographyaorta = $request->validated();
        $msqcangiographyaorta = MSQCAngiographyAorta::create($msqcangiographyaorta);
        $msqcangiographyaorta->saveOrFail();
        return $response->setStatusCode(201);
    }
}
