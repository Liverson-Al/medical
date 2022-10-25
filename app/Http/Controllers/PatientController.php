<?php

namespace App\Http\Controllers;

use App\Models\PatientInfo;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
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
           'PhoneNumber'=>'string',
           'ResidenceRegion'=>'string',
        ]);
        PatientInfo::create($data);
        return redirect()->route('patients.index');
    }
    public function show ()
    {

    }
    public function edit ()
    {

    }
    public function update ()
    {

    }
    public function destroy ()
    {

    }
}
