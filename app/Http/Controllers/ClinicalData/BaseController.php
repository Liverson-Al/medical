<?php

namespace App\Http\Controllers\ClinicalData;

use App\Http\Controllers\Controller;
use App\Http\Services\ClinicalData\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service){
            $this->service = $service;
    }
}
