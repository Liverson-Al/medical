<?php

namespace App\Http\Controllers\ConcomDisease;

use App\Http\Controllers\Controller;
use App\Models\ConcomDisease;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke(ConcomDisease $concomdisease, Response $response){
        $concomdisease->delete();
        return $response->setStatusCode(204);
        //return redirect()->route('concomdisease.index');
    }
}
