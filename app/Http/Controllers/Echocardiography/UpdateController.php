<?php

namespace App\Http\Controllers\Anthropometry;

use App\Http\Controllers\Controller;

use App\Http\Requests\Echocardiography\UpdateRequest;
use App\Models\Echocardiography;
use All\Http\Resources\EchocardiographyResource;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Echocardiography $echocardiography){
        $data = $request->validated();
        $echocardiography->update($data);
        $echocardiography = $echocardiography->fresh();

        return new EchocardiographyResource($echocardiography);
    }
}
