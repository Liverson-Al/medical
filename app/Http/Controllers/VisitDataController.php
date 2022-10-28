<?php

namespace App\Http\Controllers;

use App\Models\VisitData;
use Illuminate\Http\Request;

class VisitDataController extends Controller
{

    public function index()
    {
        //
        $visitdata = VisitData::all();

        return view('visitdata.index', compact('visitdata')); // -> resources/views/index.blade.php
    }

    public function create()
    {
        //
        return view('visitdata.create'); // -> resources/views/create.blade.php
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'PatientID'=>'required',
            'InitialID'=>'required',
            'DoctorID'=>'required',
            'ExaminationPlace'=>'required',
            'ExaminationDate'=>'required',
            'VisitNum'=>'required',
            'Comment'=>'required'
        ]);
        $visitdata = new VisitData([
            'PatientID'=>$request->get('PatientID'),
            'InitialID'=>$request->get('InitialID'),
            'DoctorID'=>$request->get('DoctorID'),
            'ExaminationPlace'=>$request->get('ExaminationPlace'),
            'ExaminationDate'=>$request->get('ExaminationDate'),
            'VisitNum'=>$request->get('VisitNum'),
            'Comment'=>$request->get('Comment')
        ]);
        $visitdata->save();
        return redirect('/visitdata')->with('success', 'VisitData saved.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $visitdata = VisitData::find($id);
        return view('visitdata.edit', compact('visitdata'));
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'PatientID'=>'required',
            'InitialID'=>'required',
            'DoctorID'=>'required',
            'ExaminationPlace'=>'required',
            'ExaminationDate'=>'required',
            'VisitNum'=>'required',
            'Comment'=>'required'
        ]);
        $visitdata = VisitData::find($id);
        $visitdata ->PatientID = $request->get('PatientID');
        $visitdata ->InitialID = $request->get('InitialID');
        $visitdata ->DoctorID = $request->get('DoctorID');
        $visitdata ->ExaminationPlace = $request->get('ExaminationPlace');
        $visitdata ->ExaminationDate = $request->get('ExaminationDate');
        $visitdata ->VisitNum = $request->get('VisitNum');
        $visitdata ->Comment = $request->get('Comment');
        $visitdata->save();

        return redirect('/visitdata')->with('success', 'VisitData updated.');
    }

    public function destroy($id)
    {
        //
        $visitdata = VisitData::find($id);
        $visitdata->delete();

        return redirect('/visitdata')->with('success', 'VisitData removed.');
    }
}
