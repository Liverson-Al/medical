<?php

namespace App\Http\Resources\User;

use App\Models\Clinic;
use App\Models\Occupation;
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
        $clinic = Clinic::find($user->ClinicID);
        $occupation = Occupation::find($user->OccupationID);
        return [
            'id'            => $user->id,
            'email'         => $user->email,
            'name'          => $user->Name,
            'surname'       => $user->Surname,
            'patronymic'    => $user->Patronymic,
            'birthdate'     => $user->BirthDate,
            'sex'           => $user->Sex,

            'region'        => $clinic->Region,
            'city'          => $clinic->City,
            'placeOfWork'   => $clinic->Name,
//            'shit' => new ShortUserResource($user),

            'role'          => $user->RoleID,

            'occupation'    => $occupation->Value,

            'workExperience'=> $user->WorkExperience,
        ];
    }
}
