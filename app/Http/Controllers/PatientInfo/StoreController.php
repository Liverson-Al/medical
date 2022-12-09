<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientInfo\StoreRequest;
use App\Models\Anthropometry;
use App\Models\ClinicalData;
use App\Models\ConcomDisease;
use App\Models\Echocardiography;
use App\Models\MSQCAngiographyAorta;
use App\Models\PatientHistory;
use App\Models\Patientinfo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends BaseController
{
    public function __invoke(Request $request, Response $response){

        $patientID = $request->patientID;
        $employee_id = $request->employee_id;

        $personal_data = new PatientInfo();
        $personal_data->id = $patientID;
        $personal_data->fill($request->personal_data);
        $personal_data->saveOrFail();

        if ($request->anthropometric_data) {
            $anthropometric_data = new Anthropometry();
            $anthropometric_data->patient_id = $patientID;
            $anthropometric_data->user_id = $employee_id;
            $anthropometric_data->fill($request->anthropometric_data);
            $anthropometric_data->saveOrFail();
        }

        if ($request->clinical_data) {
            $clinical_data = new ClinicalData();
            $clinical_data->visit_id = $patientID;
            $clinical_data->user_id = $employee_id;
            $clinical_data->fill($request->clinical_data);
            $clinical_data->saveOrFail();
        }

        if($request->concom_desease) {
            $concom_desease = new ConcomDisease();
            $concom_desease->patient_id = $patientID;
            $concom_desease->user_id = $employee_id;
            $concom_desease->fill($request->concom_desease);
            $concom_desease->saveOrFail();
        }


        if ($request->anamnesis) {
            $anamnesis = new PatientHistory();
            $anamnesis->patient_id = $patientID;
            $anamnesis->user_id = $employee_id;
            $anamnesis->fill($request->anamnesis);
            $anamnesis->saveOrFail();
        }

        if ($request->echocardiogram) {
            $echocardiogram = new Echocardiography();
            $echocardiogram->visit_id = $patientID;
            $echocardiogram->user_id = $employee_id;
            $echocardiogram->fill($request->echocardiogram);
            $echocardiogram->saveOrFail();
        }

        if ($request->MCT) {
            $MCT = new MSQCAngiographyAorta();
            $echocardiogram->VisitPatientID = $patientID;
            $echocardiogram->user_id = $employee_id;
            $MCT->fill($request->MCT);
            $MCT->saveOrFail();
        }


//        $patient = $request->validated();
//        $patient = Patientinfo::create($patient);
//        $patient->saveOrFail();

        return $response->setStatusCode(201);
    }
}
