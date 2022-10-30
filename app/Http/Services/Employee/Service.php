<?php

namespace App\Http\Services\Employee;

use App\Models\Employee;

class Service
{
    public function store($employee)
    {
        $employee = Employee::create($employee);
        return $employee;
    }
    public function update()
    {

    }

}
