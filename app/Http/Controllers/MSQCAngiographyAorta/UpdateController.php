<?php

namespace App\Http\Controllers\MSQCAngiographyAorta;

use App\Http\Controllers\Controller;

use App\Http\Requests\MSQCAngiographyAorta\UpdateRequest;
use App\Models\MSQCAngiographyAorta;
use All\Http\Resources\MSQCAngiographyAortaResource;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, MSQCAngiographyAorta $msqcangiographyaorta){
        $data = $request->validated();
        $msqcangiographyaorta->update($data);
        $msqcangiographyaorta = $msqcangiographyaorta->fresh();

        return new MSQCAngiographyAortaResource($msqcangiographyaorta);
    }
}
