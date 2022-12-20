<?php

namespace App\Http\Resources\PatientInfo;

use App\Models\Clinic;
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
        $clinic = Clinic::find($patient->ClinicID);

        $birthday_timestamp = strtotime($patient->birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }

        return [
            'id'             => strval($patient->id),
            'first_name'           => $patient->first_name,
            'second_name'        => $patient->second_name,
            'patronymic'     => $patient->patronymic,
            'birthday'      => $patient->birthday,
            'age'            => $age,
            'sex'            => $patient->sex,
            'clinic'         => $clinic->Name,
            'city'           => $clinic->City,
            'residenseregion'=> $clinic->Region,
        ];
    }
}
