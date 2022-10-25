<?php

namespace App\Http\Controllers;

use App\Models\VisitData;
use Illuminate\Http\Request;

class VisitDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visitdata = VisitData::all();

        return view('visitdata.index', compact('visitdata')); // -> resources/views/index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visitdata.create'); // -> resources/views/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $visitdata = VisitData::find($id);
        return view('visitdata.edit', compact('visitdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $visitdata = VisitData::find($id);
        $visitdata->delete();

        return redirect('/visitdata')->with('success', 'VisitData removed.');
    }
}
