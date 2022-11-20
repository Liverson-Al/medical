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
//            'age'            => calculate_age($patient->BirthDate),
            'sex'            => $patient->Sex,
            'age'            => $this->calculate_age($patient->BirthDate),
            //'region'         => $clinic->Region,
            //'city'           => $clinic->City,
            //'residenseregion'=> $clinic->Name,
            'ClinicID'      => $patient->ClinicID,
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
