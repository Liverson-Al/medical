<?php

namespace App\Http\Controllers\PatientHistory;

use App\Http\Controllers\Controller;
use App\Http\Services\PatientHistory\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service){
            $this->service = $service;
    }
}
