<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Employee $employee){
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
