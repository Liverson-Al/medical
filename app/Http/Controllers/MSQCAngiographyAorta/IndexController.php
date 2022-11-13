<?php

namespace App\Http\Controllers\MSQCAngiographyAorta;

use App\Http\Controllers\Controller;
use App\Models\MSQCAngiographyAorta;
use App\Http\Resources\MSQCAngiographyAorta\MSQCAngiographyAortaResource;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $msqcangiographyaorta = MSQCAngiographyAorta::all();
        return MSQCAngiographyAortaResource::collection($msqcangiographyaorta);
    }
}
