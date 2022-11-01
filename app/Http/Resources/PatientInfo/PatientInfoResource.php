<?php

namespace App\Http\Resources\PatientInfo;

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
        return [
            'Name'          => $patient->Name,
            'Surname'       => $patient->Surname,
            'Patronymic'    => $patient->Patronymic,
            'BirthDate'     => $patient->BirthDate,
            'Sex'           => $patient->Sex,
            'ClinicID'      => $patient->ClinicID,

        ];
    }
}
