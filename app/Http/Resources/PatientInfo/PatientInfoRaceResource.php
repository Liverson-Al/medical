<?php

namespace App\Http\Resources\PatientInfo;

use App\Http\Resources\Anthropometry\AnthropometryResource;
use App\Http\Resources\ClinicalData\ClinicalDataResource;
use App\Http\Resources\ConcomDisease\ConcomDiseaseResource;
use App\Http\Resources\Echocardiography\EchocardiographyResource;
use App\Http\Resources\MSQCAngiographyAorta\MSQCAngiographyAortaResource;
use App\Http\Resources\PatientHistory\PatientHistoryResource;
use App\Http\Resources\User\UserResource;
use App\Models\Anthropometry;
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
        $clinic = Clinic::find($patient->ClinicID);
        $user = new UserResource(auth()->user());
        return [
            "patientID"=> $patient->id,
            "employee_id"=> $user['id'],
            "personal_data" => [

                'first_name'           => $patient->first_name,
                'second_name'        => $patient->second_name,
                'patronymic'     => $patient->patronymic,
                'birthday'      => $patient->birthday,
                'sex'            => strval($patient->sex),
                'region'         => $clinic->Region,
                'residenseregion'=> $clinic->Name,
                'race'          => 'evr',
                'version'       => 0,
         ],
            "anthropometric_data" => new AnthropometryResource($patient),
            "clinical_data" => new ClinicalDataResource($patient),
            "concom_desease" => new ConcomDiseaseResource($patient),
            "anamnesis" => new PatientHistoryResource($patient),
            "echocardiogram" => new EchocardiographyResource($patient),
            "MCT" => new MSQCAngiographyAortaResource($patient),
         ];
    }
}
