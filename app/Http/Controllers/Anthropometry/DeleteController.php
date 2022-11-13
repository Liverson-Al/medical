<?php

namespace App\Http\Controllers\Anthropometry;

use App\Http\Controllers\Controller;
use App\Models\Anthropometry;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke(Anthropometry $anthropometry, Response $response){
        $anthropometry->delete();
        return $response->setStatusCode(204);
        // return redirect()->route('anthropometry.index');
    }
}
