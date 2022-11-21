<?php

namespace App\Http\Resources\PatientInfo;

use App\Http\Resources\AnthropometryResource\AnthropometryResource;
use App\Http\Resources\ClinicalData\ClinicalDataResource;
use App\Http\Resources\ConcomDisease\ConcomDiseaseResource;
use App\Http\Resources\Echocardiography\EchocardiographyResource;
use App\Http\Resources\MSQCAngiographyAorta\MSQCAngiographyAortaResource;
use App\Http\Resources\PatientCollection;
use App\Http\Resources\PatientHistory\PatientHistoryResource;
use App\Models\Clinic;
use App\Models\PatientInfo;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientInfoRaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $patient = $this->resource;
        return [
            "patientID"=> strval($patient->id),
            "employee_id"=> 1,
            "personal_data" => [

                'first_name'           => $patient->Name,
                'second_name'        => $patient->Surname,
                'patronymic'     => $patient->Patronymic,
                'birthday'      => $patient->BirthDate,
                'sex'            => strval($patient->Sex),
                //'region'         => $clinic->Region,
                //'city'           => $clinic->City,
                //'residenseregion'=> $clinic->Name,
                'region'        => "Северо-западный регион",
                'clinic'          => "СПБГУ",
                'race'          => 'evr',
                'version'       => 0,
                //'ClinicID'      => $patient->ClinicID,
         ],
            "anthropometric_data" => AnthropometryResource::collection($patient->whenLoaded("patient_id")),
            "clinical_data" => ClinicalDataResource::collection($patient->whenLoaded("visit_id")),
            "concom_desease" => ConcomDiseaseResource::collection($patient->whenLoaded("patient_id")),
            "anamnesis" => PatientHistoryResource::collection($patient->whenLoaded("id")),
            "echocardiogram" => EchocardiographyResource::collection($patient->whenLoaded("VisitPatientID")),
            "MCT" => MSQCAngiographyAortaResource::collection($patient->whenLoaded("VisitPatientID")),
         ];
    }

    private function calculate_age($birthday) {
        $birthday_timestamp = strtotime($birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }
        return $age;
    }
}
