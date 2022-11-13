<?php

namespace App\Http\Controllers\Echocardiography;

use App\Http\Controllers\Controller;
use All\Http\Resources\EchocardiographyResource;
use App\Models\Echocardiography;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Echocardiography $echocardiography){
        return new EchocardiographyResource($echocardiography);
    }
}
