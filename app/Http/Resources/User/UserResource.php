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
        $user = $this->resource;
        return [
            'email'         => $user->email,
            'password'      => $user->password,
            'Name'          => $user->Name,
            'Surname'       => $user->Surname,
            'Patronymic'    => $user->Patronymic,
            'BirthDate'     => $user->BirthDate,
            'Sex'           => $user->Sex,
            'ClinicID'      => $user->ClinicID,
            'RoleID'        => $user->RoleID,
            'OccupationID'  => $user->OccupationID,
            'WorkExperience'=> $user->WorkExperience,
        ];
    }
}
