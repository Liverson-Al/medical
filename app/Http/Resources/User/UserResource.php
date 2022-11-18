<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;

/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array
 */

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        //$user = $this->resource;
        return [
            'id'            => $this->id,
            'Name'          => $this->Name,
            'Surname'       => $this->Surname,
            'Patronymic'    => $this->Patronymic,
            'BirthDate'     => $this->BirthDate,
            'Sex'           => $this->Sex,
            'ClinicID'      => $this->ClinicID,
            'RoleID'        => $this->RoleID,
            'OccupationID'  => $this->OccupationID,
            'WorkExperience'=> $this->WorkExperience,
        ];
    }
}
