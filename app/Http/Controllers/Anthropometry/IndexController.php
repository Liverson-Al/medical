<?php

namespace App\Http\Controllers\Anthropometry;

use App\Http\Controllers\Controller;
use App\Models\Anthropometry;
use App\Http\Resources\AnthropometryResource\AnthropometryResource;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $anthropometry = Anthropometry::all();
        return AnthropometryResource::collection($anthropometry);
    }
}
