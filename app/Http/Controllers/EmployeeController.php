<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employees', compact('employees'));
    }
    public function create()
    {
        return view('employees.create');
    }

    public function store()
    {
        $data = request()->validate([
            'Name'=>'string',
            'Surname'=>'string',
            'Patronymic'=>'string',
            'BirthDate'=>'date',
            'Sex'=>'boolean',
            'WorkPlaceID'=>0,
            'Occupation_id'=>0,
            'Role_id'=>0,
            'WorkExperience'=>'string',





        ]);
        Employee::create($data);
        return redirect()->route('employees.index');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }
    public function update(Employee $employee)
    {
        $data = request()->validate([
            'Name'=>'string',
            'Surname'=>'string',
            'Patronymic'=>'string',
            'BirthDate'=>'date',
            'Sex'=>'boolean',
            'WorkPlaceID'=>0,
            'Occupation_id'=>0,
            'Role_id'=>0,
            'WorkExperience'=>'string',
        ]);
        $employee->update($data);
        return redirect()->route('employees.show', $employee->id);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
