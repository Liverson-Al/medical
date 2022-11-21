<?php

namespace App\Http\Resources\PatientInfo;

use App\Models\Clinic;
use App\Models\PatientInfo;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientInfoZGLResource extends JsonResource
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
            'id'             => 1,
            'name'           => "Иван",
            'surname'        => "Щеглов",
            'patronymic'     => "Павлович",
            'birthdate'      => "1995-10-11",
            'sex'            => 1,
            'age'            => 27,
            'region'        => "Северо-западный регион",
            'city'          => "Санкт-Петербург",
            'residenseregion'   => "Северо-западный регион",
        ];
    }
}
