<?php

namespace App\Http\Controllers\Echocardiography;

use App\Http\Controllers\Controller;
use App\Models\Echocardiography;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke(Echocardiography $echocardiography, Response $response){
        $echocardiography->delete();
        return $response->setStatusCode(204);
        //return redirect()->route('echocardiography.index');
    }
}
