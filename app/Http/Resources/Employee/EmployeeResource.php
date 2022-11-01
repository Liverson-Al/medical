<?php

namespace App\Http\Resources\Employee;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array
 */

class EmployeeResource extends JsonResource
{

    public function toArray($request)
    {
        $employee = $this->resource;
        return [
            'Name'          => $employee->Name,
            'Surname'       => $employee->Surname,
            'Patronymic'    => $employee->Patronymic,
            'BirthDate'     => $employee->BirthDate,
            'Sex'           => $employee->Sex,
            'ClinicID'      => $employee->ClinicID,
            'RoleID'        => $employee->RoleID,
            'OccupationID'  => $employee->OccupationID,
            'WorkExperience'=> $employee->WorkExperience,
        ];
    }
}
