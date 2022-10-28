<?php

namespace App\Http\Controllers;

use App\Models\PatientInfo;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = PatientInfo::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store ()
    {
        $data = request()->validate([
           'PatientSurname'=>'string',
           'PatientName'=>'string',
           'PatientPatronymic'=>'string',
           'BirthDate'=>'date',
           'Sex'=>'boolean',
           'ResidenceRegion'=>'string',
        ]);
        PatientInfo::create($data);
        return redirect()->route('patients.index');
    }
    public function show (PatientInfo $patient)
    {
        return view('patients.show', compact('patient'));
    }
    public function edit (PatientInfo $patient)
    {
        return view('patients.edit', compact('patient'));
    }
    public function update (PatientInfo $patient)
    {
        $data = request()->validate([
            'PatientSurname'=>'string',
            'PatientName'=>'string',
            'PatientPatronymic'=>'string',
            'BirthDate'=>'date',
            'Sex'=>'boolean',
            'ResidenceRegion'=>'string',
        ]);
        $patient->update($data);
        return redirect()->route('patients.show', $patient->id);
    }
    public function destroy (PatientInfo $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index');
    }
}
