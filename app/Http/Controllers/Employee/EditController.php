<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Resources\Employee\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Employee $employee){
        return new EmployeeResource($employee);
        //return view('employees.edit', compact('employee'));
    }
}
