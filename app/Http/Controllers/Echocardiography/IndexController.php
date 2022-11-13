<?php

namespace App\Http\Controllers\Echocardiography;

use App\Http\Controllers\Controller;
use App\Models\Echocardiography;
use App\Http\Resources\Echocardiography\EchocardiographyResource;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $anthropometry = Echocardiography::all();
        return EchocardiographyResource::collection($anthropometry);
    }
}
