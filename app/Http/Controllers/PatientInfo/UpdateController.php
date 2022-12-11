<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;

use App\Http\Resources\PatientInfo\PatientInfoRaceResource;
use App\Http\Resources\PatientInfo\PatientInfoResource;
use App\Models\Anthropometry;
use App\Models\ClinicalData;
use App\Models\ConcomDisease;
use App\Models\Echocardiography;
use App\Models\MSQCAngiographyAorta;
use App\Models\PatientHistory;
use App\Models\Patientinfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(Request $request, $patientID, Response $response){
        $data = $request->all();
        if($request->patient_info){
            $patient = PatientInfo::where('id', $patientID)->update($data["patient_info"]);
            $request->patient_info = PatientInfo::find($patientID);
        }

        if ($request->anthropometric_data) {
            $anthropometric_data = Anthropometry::where('id', $patientID)->update($data["anthropometric_data"]);
            $request->anthropometric_data = Anthropometry::find($patientID);
        }

        if ($request->clinical_data) {
            $clinical_data = ClinicalData::where('id', $patientID)->update($request->clinical_data);
            $request->clinical_data = ClinicalData::find($patientID);
        }

        if ($request->concom_desease) {
            $concom_desease = ConcomDisease::where('id', $patientID)->update($request->concom_desease);
            $request->concom_desease = ConcomDisease::find($patientID);
        }

        if ($request->anamnesis) {
            $anamnesis = PatientHistory::where('id', $patientID)->update($request->anamnesis);
            $request->anamnesis = PatientHistory::find($patientID);
        }

        if ($request->echocardiogram) {
            $echocardiogram = Echocardiography::where('id', $patientID)->update($request->echocardiogram);
            $request->echocardiogram = Echocardiography::find($patientID);
        }

        if ($request->MCT) {
            $MCT = MSQCAngiographyAorta::where('id', $patientID)->update($request->MCT);
            $request->MCT = MSQCAngiographyAorta::find($patientID);
        }

        $patient = PatientInfo::where('id', $patientID)->first();
        return $response->setStatusCode(202)->setContent(new PatientInfoRaceResource($patient));
    }
}
