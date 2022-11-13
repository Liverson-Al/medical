<?php

namespace App\Http\Controllers\MSQCAngiographyAorta;

use App\Http\Controllers\Controller;
use App\Models\MSQCAngiographyAorta;
use All\Http\Resources\MSQCAngiographyAortaResource;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(MSQCAngiographyAorta $msqcangiographyaorta){
        return new MSQCAngiographyAortaResource($msqcangiographyaorta);
        //return view('patients.show', compact('patient'));
    }
}
