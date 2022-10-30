<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\UpdateRequest;
use App\Http\Resources\Employee\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use League\CommonMark\Extension\FrontMatter\Listener\FrontMatterPostRenderListener;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Employee $employee){
        $data = $request->validated();
        $employee->update($data);
        $employee = $employee->fresh();

        return new EmployeeResource($employee);

        //return redirect()->route('employees.show', $employee->id);
    }
}
