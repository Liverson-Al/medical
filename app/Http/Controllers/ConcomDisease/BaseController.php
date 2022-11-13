<?php

namespace App\Http\Controllers\ConcomDisease;

use App\Http\Controllers\Controller;
use App\Http\Services\ConcomDisease\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service){
            $this->service = $service;
    }
}
