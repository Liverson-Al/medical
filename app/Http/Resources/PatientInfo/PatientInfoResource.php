<?php

namespace App\Http\Resources\PatientInfo;

use App\Models\Clinic;
use App\Models\PatientInfo;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientInfoResource extends JsonResource
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
        return [
            'id'             => $patient->id,
            'name'           => $patient->Name,
            'surname'        => $patient->Surname,
            'patronymic'     => $patient->Patronymic,
            'birthdate'      => $patient->BirthDate,
//            'age'            => PatientInfo::calculate_age($patient->BirthDate),
            'sex'            => $patient->Sex,
            //'region'         => $clinic->Region,
            //'city'           => $clinic->City,
            //'residenseregion'=> $clinic->Name,
            'ClinicID'      => $patient->ClinicID,

        ];
    }
}
