<?php

namespace App\Http\Controllers\MSQCAngiographyAorta;

use App\Http\Controllers\Controller;
use All\Http\Resources\MSQCAngiographyAortaResource;
use App\Models\MSQCAngiographyAorta;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(MSQCAngiographyAorta $msqcangiographyaorta){
        return new MSQCAngiographyAortaResource($msqcangiographyaorta);
        // return view('patients.edit', compact('patient'));
    }
}
