<?php

namespace App\Http\Resources\Clinic;

use App\Models\Clinic;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array
 */

class ClinicResource extends JsonResource
{

    public function toArray($request)
    {
        $clinic = $this->resource;
        return [
            'id'                => $clinic->id,
            'city'              => $clinic->City,
            'residenceregion'   => $clinic->Region,
            'placeOfWork'       => $clinic->Name,

        ];
    }
}
