<?php

namespace App\Http\Controllers\Anthropometry;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnthropometryResource\AnthropometryResource;
use App\Models\Anthropometry;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Anthropometry $anthropometry){
        return new AnthropometryResource($anthropometry);
        // return view('patients.edit', compact('patient'));
    }
}
