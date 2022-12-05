<?php

namespace App\Http\Resources\User;

use App\Models\Clinic;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array
 */

function calculate_age($birthday)
{
    $birthday_timestamp = strtotime($birthday);
    $age = date('Y') - date('Y', $birthday_timestamp);
    if (date('md', $birthday_timestamp) > date('md')) {
        $age--;
    }
    return $age;
}

class ShortUserResource extends JsonResource
{

    public function toArray($request)
    {


        $user = $this->resource;
        $clinic = Clinic::find($user->ClinicID);

        $birthday_timestamp = strtotime($user->BirthDate);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }

        return [
            'id'            => $user->id,
            'name'          => $user->Name,
            'surname'       => $user->Surname,
            'patronymic'    => $user->Patronymic,
            'age'           => $age,
            'city'          => $clinic->City,
            'placeOfWork'   => $clinic->Name,
            'workExperience'=> $user->WorkExperience,
        ];
    }
}
