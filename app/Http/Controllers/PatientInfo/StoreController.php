<?php

namespace App\Http\Controllers\PatientInfo;

use App\Http\Controllers\Controller;
use App\Models\Anthropometry;
use App\Models\Clinic;
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
        $request->request->add(['ClinicID' => 1]);
        $ClinicID = 1;


        $personal_data = new PatientInfo();
        $pd = $request->personal_data;
        unset($pd["clinic"]);
        unset($pd["region"]);
        $pd['ClinicID'] = $ClinicID;
        $personal_data->fill($pd);
        $personal_data->saveOrFail();

        if ($request->anthropometric_data) {
            $anthropometric_data = new Anthropometry();
            $anthropometric_data->patient_id = $patientID;
            $anthropometric_data->user_id = $employee_id;
            $anthropometric_data->fill($request->anthropometric_data);
            $anthropometric_data->saveOrFail();
        } else {
            $anthropometric_data = new Anthropometry();
            $anthropometric_data->patient_id = $patientID;
            $anthropometric_data->user_id = $employee_id;
            $anthropometric_data->saveOrFail();
        }

        if ($request->clinical_data) {
            $clinical_data = new ClinicalData();
            $clinical_data->visit_id = $patientID;
            $clinical_data->user_id = $employee_id;
            $clinical_data->fill($request->clinical_data);
            $clinical_data->saveOrFail();
        } else {
            $clinical_data = new ClinicalData();
            $clinical_data->visit_id = $patientID;
            $clinical_data->user_id = $employee_id;
            $clinical_data->saveOrFail();
        }

        if ($request->concom_desease) {
            $concom_desease = new ConcomDisease();
            $concom_desease->patient_id = $patientID;
            $concom_desease->user_id = $employee_id;
            $concom_desease->fill($request->concom_desease);
            $concom_desease->saveOrFail();
        } else {
            $concom_desease = new ConcomDisease();
            $concom_desease->patient_id = $patientID;
            $concom_desease->user_id = $employee_id;
            $concom_desease->saveOrFail();
        }


        if ($request->anamnesis) {
            $anamnesis = new PatientHistory();

            $anamnesis->patient_id = $patientID;
            $anamnesis->user_id = $employee_id;
            $anamnesis->fill($request->anamnesis);
            $anamnesis->saveOrFail();
        } else {
            $anamnesis = new PatientHistory();
            $anamnesis->patient_id = $patientID;
            $anamnesis->user_id = $employee_id;
            $anamnesis->saveOrFail();
        }

        if ($request->echocardiogram) {
            $echocardiogram = new Echocardiography();
            $echocardiogram->visit_id = $patientID;
            $echocardiogram->user_id = $employee_id;
            $echocardiogram->fill($request->echocardiogram);
            $echocardiogram->saveOrFail();
        } else {
            $echocardiogram = new Echocardiography();
            $echocardiogram->visit_id = $patientID;
            $echocardiogram->user_id = $employee_id;
            $echocardiogram->saveOrFail();
        }

        if ($request->MCT) {
            $MCT = new MSQCAngiographyAorta();
            $MCT->VisitPatientID = $patientID;
            $MCT->user_id = $employee_id;
            $MCT->fill($request->MCT);
            $MCT->saveOrFail();
        } else {
            $MCT = new MSQCAngiographyAorta();
            $MCT->VisitPatientID = $patientID;
            $MCT->user_id = $employee_id;
            $MCT->saveOrFail();
        }

        return $response->setStatusCode(201);
    }
}
