<?php

namespace App\Http\Controllers\Echocardiography;

use App\Http\Controllers\Controller;
use App\Models\Echocardiography;
use All\Http\Resources\EchocardiographyResource;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Echocardiography $echocardiography){
        return new EchocardiographyResource($echocardiography);
        //return view('patients.show', compact('patient'));
    }
}
