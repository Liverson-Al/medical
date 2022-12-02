<?php

namespace App\Http\Resources\User;

use App\Http\Resources\ClinicResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;

/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array
 */

class ShortUserResource extends JsonResource
{

    public function toArray($request)
    {
        $user = $this->resource;
        //$clinic = ClinicResource::collection($user);
        return [
            'id'            => $user->id,
            'name'          => $user->Name,
            'surname'       => $user->Surname,
            'patronymic'    => $user->Patronymic,
            'age'           => 25,
            'city'        => "Санкт-Петербург",
//            'city'        => $clinic->City,
            'placeOfWork'        => "СПБГУ",
//            'placeOfWork'        => $clinic->Name,
            'workExperience'=> $user->WorkExperience,
        ];
    }
}
