<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientHistory;

class PatientHistoryController extends Controller
{
    //
    public function index()
    {
        $patienthistory = PatientHistory::all();

        return view('patienthistory.index', compact('patienthistory'));
    }

    public function create()
    {
        return view('patienthistory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'dis_heart_blood_vessels_first_line_relatives'=>'required',
            'relatives_conn_tiss_dysplasia'=>'required',
            'heart_surgeries_pr'=>'required',
            'heart_surgeries_type'=>'required',
            'genetic_analysis_pr'=>'required',
            'genetic_analysis_res'=>'required',
            'smoking_experience'=>'required',
            'alko_consumption_experince'=>'required',
            'drug_consumption_experience'=>'required',
            'occupational_hazards'=>'required',
            'sports'=>'required',
            'disease_knowledge'=>'required',
            'works'=>'required',
            'blood_thin_drugs'=>'required',
            'disaggregants'=>'required',
            'employee_id'=>'required',
            'version'=>'required',
            'date'=>'required',
        ]);

        $patienthistory = new PatientHistory([
            'id'=>$request->get('id'),
            'dis_heart_blood_vessels_first_line_relatives'=>$request->get('dis_heart_blood_vessels_first_line_relatives'),
            'relatives_conn_tiss_dysplasia'=>$request->get('relatives_conn_tiss_dysplasia'),
            'heart_surgeries_pr'=>$request->get('heart_surgeries_pr'),
            'heart_surgeries_type'=>$request->get('heart_surgeries_type'),
            'genetic_analysis_pr'=>$request->get('genetic_analysis_pr'),
            'genetic_analysis_res'=>$request->get('genetic_analysis_res'),
            'smoking_experience'=>$request->get('smoking_experience'),
            'alko_consumption_experince'=>$request->get('alko_consumption_experince'),
            'drug_consumption_experience'=>$request->get('drug_consumption_experience'),
            'occupational_hazards'=>$request->get('occupational_hazards'),
            'sports'=>$request->get('sports'),
            'disease_knowledge'=>$request->get('disease_knowledge'),
            'works'=>$request->get('works'),
            'blood_thin_drugs'=>$request->get('blood_thin_drugs'),
            'disaggregants'=>$request->get('disaggregants'),
            'employee_id'=>$request->get('employee_id'),
            'version'=>$request->get('version'),
            'date'=>$request->get('date'),
        ]);
        $patienthistory->save();
        return redirect('/patienthistory')->with('success', 'PatientHistory saved.');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $patienthistory = PatientHistory::find($id);
        return view('patienthistory.edit', compact('patienthistory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'dis_heart_blood_vessels_first_line_relatives'=>'required',
            'relatives_conn_tiss_dysplasia'=>'required',
            'heart_surgeries_pr'=>'required',
            'heart_surgeries_type'=>'required',
            'genetic_analysis_pr'=>'required',
            'genetic_analysis_res'=>'required',
            'smoking_experience'=>'required',
            'alko_consumption_experince'=>'required',
            'drug_consumption_experience'=>'required',
            'occupational_hazards'=>'required',
            'sports'=>'required',
            'disease_knowledge'=>'required',
            'works'=>'required',
            'blood_thin_drugs'=>'required',
            'disaggregants'=>'required',
            'employee_id'=>'required',
            'version'=>'required',
            'date'=>'required',
        ]);

        $patienthistory = PatientHistory::find($id);
        $patienthistory->id=$request->get('id');
        $patienthistory->dis_heart_blood_vessels_first_line_relatives=$request->get('dis_heart_blood_vessels_first_line_relatives');
        $patienthistory->relatives_conn_tiss_dysplasia=$request->get('relatives_conn_tiss_dysplasia');
        $patienthistory->heart_surgeries_pr=$request->get('heart_surgeries_pr');
        $patienthistory->heart_surgeries_type=$request->get('heart_surgeries_type');
        $patienthistory->genetic_analysis_pr=$request->get('genetic_analysis_pr');
        $patienthistory->genetic_analysis_res=$request->get('genetic_analysis_res');
        $patienthistory->smoking_experience=$request->get('smoking_experience');
        $patienthistory->alko_consumption_experince=$request->get('alko_consumption_experince');
        $patienthistory->drug_consumption_experience=$request->get('drug_consumption_experience');
        $patienthistory->occupational_hazards=$request->get('occupational_hazards');
        $patienthistory->sports=$request->get('sports');
        $patienthistory->disease_knowledge=$request->get('disease_knowledge');
        $patienthistory->works=$request->get('works');
        $patienthistory->blood_thin_drugs=$request->get('blood_thin_drugs');
        $patienthistory->disaggregants=$request->get('disaggregants');
        $patienthistory->employee_id=$request->get('employee_id');
        $patienthistory->version=$request->increment('version',1);
        $patienthistory->date=$request->get('date');
        $patienthistory->save();

        return redirect('/patienthistory')->with('success', 'PatientHistory updated.');
    }

    public function destroy($id)
    {
        $patienthistory = PatientHistory::find($id);
        $patienthistory -> delete();

        return redirect('/patienthistory')->with('success', 'PatientHistory removed.');
    }

}
