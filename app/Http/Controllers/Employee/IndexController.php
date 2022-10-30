<?php

namespace App\Http\Controllers\Employee;


use App\Http\Controllers\Controller;
use App\Http\Resources\Employee\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $employees = Employee::all();
        return EmployeeResource::collection($employees);
        // return view('employees', compact('employees'));
    }
}
