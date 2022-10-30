<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreRequest;
use App\Http\Resources\Employee\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){

        $employee = $request->validated();

        //$this->service->store($employee); - через baseController и Service, но чёт не работает
        $employee = Employee::create($employee);

        return new EmployeeResource($employee);

        //return redirect()->route('employees.index');
    }
}
