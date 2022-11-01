<?php

namespace App\Http\Services\PatientInfo;

use App\Models\Patientinfo;

class Service
{
    public function store($patient)
    {
        $patient = Patientinfo::create($patient);
        return $patient;
    }
    public function update()
    {

    }

}
