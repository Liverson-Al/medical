<?php

namespace App\Http\Controllers\Anthropometry;

use App\Http\Controllers\Controller;
use App\Http\Services\Anthropometry\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service){
            $this->service = $service;
    }
}
