<?php

namespace App\Http\Controllers\PatientHistory;

use App\Http\Controllers\Controller;

use App\Http\Requests\PatientHistory\UpdateRequest;
use App\Models\PatientHistory;
use All\Http\Resources\PatientHistoryResource;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, PatientHistory $patienthistory){
        $data = $request->validated();
        $patienthistory->update($data);
        $patienthistory = $patienthistory->fresh();

        return new PatientHistoryResource($patienthistory);
    }
}
