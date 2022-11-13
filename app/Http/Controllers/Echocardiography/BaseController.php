<?php

namespace App\Http\Controllers\Echocardiography;

use App\Http\Controllers\Controller;
use App\Http\Services\Echocardiography\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service){
            $this->service = $service;
    }
}
