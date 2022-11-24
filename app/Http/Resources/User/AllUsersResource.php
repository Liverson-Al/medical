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

class AllUsersResource extends JsonResource
{

    public function toArray($request)
    {
        $user = $this->resource;
        //$clinic = Clinic();
        return [
            'id'            => $user->id,
            'name'          => $user->Name,
            'surname'       => $user->Surname,
            'patronymic'    => $user->Patronymic,
            'age'           => 25,
            'city'        => "Санкт-Петербург",
            'placeOfWork'        => "СПБГУ",
            'workExperience'=> $user->WorkExperience,
        ];
    }
}
