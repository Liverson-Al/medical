<?php

namespace App\Http\Controllers\MSQCAngiographyAorta;

use App\Http\Controllers\Controller;
use App\Models\MSQCAngiographyAorta;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke(MSQCAngiographyAorta $msqcangiographyaorta, Response $response){
        $msqcangiographyaorta->delete();
        return $response->setStatusCode(204);
        //return redirect()->route('msqcangiographyaorta.index');
    }
}
