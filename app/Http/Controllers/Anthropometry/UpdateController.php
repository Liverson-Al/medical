<?php

namespace App\Http\Controllers\Anthropometry;

use App\Http\Controllers\Controller;

use App\Http\Requests\Anthropometry\UpdateRequest;
use App\Models\Anthropometry;
use App\Http\Resources\AnthropometryResource\AnthropometryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Anthropometry $anthropometry, Response $response){
        $data = $request->validated();
        $anthropometry->update($data);
        $anthropometry = $anthropometry->fresh();
        return $response->setStatusCode(202)->setContent(new AnthropometryResource($anthropometry));

        //return new AnthropometryResource($anthropometry);
    }
}
