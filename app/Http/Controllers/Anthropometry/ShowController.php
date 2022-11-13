<?php

namespace App\Http\Controllers\Anthropometry;

use App\Http\Controllers\Controller;
use App\Models\Anthropometry;
use App\Http\Resources\AnthropometryResource\AnthropometryResource;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Anthropometry $anthropometry){
        return new AnthropometryResource($anthropometry);
        //return view('patients.show', compact('patient'));
    }
}
