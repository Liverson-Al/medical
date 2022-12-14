<?php

namespace App\Http\Resources\PatientInfo;

use App\Models\Clinic;
use App\Models\PatientInfo;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
 */

class PatientInfoResource extends JsonResource
{

    public function toArray($request)
    {

        $patient = $this->resource;

        $birthday_timestamp = strtotime($patient->Birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }

        return [
            'id'             => strval($patient->id),
            'name'           => $patient->first_name,
            'surname'        => $patient->second_name,
            'patronymic'     => $patient->patronymic,
            'birthdate'      => $patient->birthday,
            'sex'            => $patient->sex,
            'age'            => $age,
            //'age'            => $this->calculate_age($patient->BirthDate),
            //'region'         => $clinic->Region,
            //'city'           => $clinic->City,
            //'residenseregion'=> $clinic->Name,
            'region'        => "Северо-западный регион",
            'city'          => "Санкт-Петербург",
            'residenseregion'   => "Северо-западный регион",
            //'ClinicID'      => $patient->ClinicID,
        ];
    }

//    private function calculate_age($birthday) {
//        $birthday_timestamp = strtotime($birthday);
//        $age = date('Y') - date('Y', $birthday_timestamp);
//        if (date('md', $birthday_timestamp) > date('md')) {
//            $age--;
//        }
//        return $age;
//    }
}
