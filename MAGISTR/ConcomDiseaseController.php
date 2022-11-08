<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConcomDisease;

class ConcomDiseaseController extends Controller
{
    //
    public function index()
    {
        $concomdisease = ConcomDisease::all();

        return view('concomdisease.index', compact('concomdisease')); // -> resources/views/index.blade.php
    }

    public function create()
    {
        return view('concomdisease.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id'=>'required',
            'cor_heart_disease_clinic'=>'required',
            'acute_myocardial_infarction_num'=>'required',
            'current_myocardial_infarction'=>'required',
            'diabetes'=>'required',
            'diabetes_type'=>'required',
            'cerebrovascular_disease'=>'required',
            'BCAStenosis'=>'required',
            'transient_ischemic_attack'=>'required',
            'ACVA'=>'required',
            'chronic_lung_disease'=>'required',
            'prev_infectious_disease'=>'required',
            'rhythm_conclusion_disturbances'=>'required',
            'thyroid_disease'=>'required',
            'acute_renal_failure'=>'required',
            'chronic_renal_failure'=>'required',
            'oncology'=>'required',
            'hematological_disease'=>'required',
            'pulmonary_embolism'=>'required',
            'chest_wall_injury'=>'required',
            'aortic_valve'=>'required',
            'acquired_AV_disease'=>'required',
            'AV_degenerative_lesions'=>'required',
            'AV_infectious_lesions'=>'required',
            'AVW_traumatic_lesions'=>'required',
            'employee_id'=>'required',
            'version'=>'required',
            'date'=>'required',
        ]);

        $concomdisease = new ConcomDisease([
            'patient_id'=>$request->get('patient_id'),
            'cor_heart_disease_clinic'=>$request->get('cor_heart_disease_clinic'),
            'acute_myocardial_infarction_num'=>$request->get('acute_myocardial_infarction_num'),
            'current_myocardial_infarction'=>$request->get('current_myocardial_infarction'),
            'diabetes'=>$request->get('diabetes'),
            'diabetes_type'=>$request->get('diabetes_type'),
            'cerebrovascular_disease'=>$request->get('cerebrovascular_disease'),
            'BCAStenosis'=>$request->get('BCAStenosis'),
            'transient_ischemic_attack'=>$request->get('transient_ischemic_attack'),
            'ACVA'=>$request->get('ACVA'),
            'chronic_lung_disease'=>$request->get('chronic_lung_disease'),
            'prev_infectious_disease'=>$request->get('prev_infectious_disease'),
            'rhythm_conclusion_disturbances'=>$request->get('rhythm_conclusion_disturbances'),
            'thyroid_disease'=>$request->get('thyroid_disease'),
            'acute_renal_failure'=>$request->get('acute_renal_failure'),
            'chronic_renal_failure'=>$request->get('chronic_renal_failure'),
            'oncology'=>$request->get('oncology'),
            'hematological_disease'=>$request->get('hematological_disease'),
            'pulmonary_embolism'=>$request->get('pulmonary_embolism'),
            'chest_wall_injury'=>$request->get('chest_wall_injury'),
            'aortic_valve'=>$request->get('aortic_valve'),
            'acquired_AV_disease'=>$request->get('acquired_AV_disease'),
            'AV_degenerative_lesions'=>$request->get('AV_degenerative_lesions'),
            'AV_infectious_lesions'=>$request->get('AV_infectious_lesions'),
            'AVW_traumatic_lesions'=>$request->get('AVW_traumatic_lesions'),
            'employee_id'=>$request->get('employee_id'),
            'version'=>$request->get('version'),
            'date'=>$request->get('date')
        ]);
        $concomdisease->save();
        return redirect('/concomdisease')->with('success', 'ConcomDisease saved.');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $concomdisease = ConcomDisease::find($id);
        return view('concomdisease.edit', compact('concomdisease'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_id'=>'required',
            'cor_heart_disease_clinic'=>'required',
            'acute_myocardial_infarction_num'=>'required',
            'current_myocardial_infarction'=>'required',
            'diabetes'=>'required',
            'diabetes_type'=>'required',
            'cerebrovascular_disease'=>'required',
            'BCAStenosis'=>'required',
            'transient_ischemic_attack'=>'required',
            'ACVA'=>'required',
            'chronic_lung_disease'=>'required',
            'prev_infectious_disease'=>'required',
            'rhythm_conclusion_disturbances'=>'required',
            'thyroid_disease'=>'required',
            'acute_renal_failure'=>'required',
            'chronic_renal_failure'=>'required',
            'oncology'=>'required',
            'hematological_disease'=>'required',
            'pulmonary_embolism'=>'required',
            'chest_wall_injury'=>'required',
            'aortic_valve'=>'required',
            'acquired_AV_disease'=>'required',
            'AV_degenerative_lesions'=>'required',
            'AV_infectious_lesions'=>'required',
            'AVW_traumatic_lesions'=>'required',
            'employee_id'=>'required',
            'version'=>'required',
            'date'=>'required',
        ]);

        $concomdisease = ConcomDisease::find($id);
        $concomdisease->patient_id=$request->get('patient_id');
        $concomdisease->cor_heart_disease_clinic=$request->get('cor_heart_disease_clinic');
        $concomdisease->acute_myocardial_infarction_num=$request->get('acute_myocardial_infarction_num');
        $concomdisease->current_myocardial_infarction=$request->get('current_myocardial_infarction');
        $concomdisease->diabetes=$request->get('diabetes');
        $concomdisease->diabetes_type=$request->get('diabetes_type');
        $concomdisease->cerebrovascular_disease=$request->get('cerebrovascular_disease');
        $concomdisease->BCAStenosis=$request->get('BCAStenosis');
        $concomdisease->transient_ischemic_attack=$request->get('transient_ischemic_attack');
        $concomdisease->ACVA=$request->get('ACVA');
        $concomdisease->chronic_lung_disease=$request->get('chronic_lung_disease');
        $concomdisease->prev_infectious_disease=$request->get('prev_infectious_disease');
        $concomdisease->rhythm_conclusion_disturbances=$request->get('rhythm_conclusion_disturbances');
        $concomdisease->thyroid_disease=$request->get('thyroid_disease');
        $concomdisease->acute_renal_failure=$request->get('acute_renal_failure');
        $concomdisease->chronic_renal_failure=$request->get('chronic_renal_failure');
        $concomdisease->oncology=$request->get('oncology');
        $concomdisease->hematological_disease=$request->get('hematological_disease');
        $concomdisease->pulmonary_embolism=$request->get('pulmonary_embolism');
        $concomdisease->chest_wall_injury=$request->get('chest_wall_injury');
        $concomdisease->aortic_valve=$request->get('aortic_valve');
        $concomdisease->acquired_AV_disease=$request->get('acquired_AV_disease');
        $concomdisease->AV_degenerative_lesions=$request->get('AV_degenerative_lesions');
        $concomdisease->AV_infectious_lesions=$request->get('AV_infectious_lesions');
        $concomdisease->AVW_traumatic_lesions=$request->get('AVW_traumatic_lesions');
        $concomdisease->employee_id=$request->get('employee_id');
        $concomdisease->version=$request->increment('version', 1);
        $concomdisease->date=$request->get('date');
        $concomdisease->save();

        return redirect('/concomdisease')->with('success', 'ConcomDisease updated.');
    }

    public function destroy($id)
    {
        $concomdisease = ConcomDisease::find($id);
        $concomdisease -> delete();

        return redirect('/concomdisease')->with('success', 'ConcomDisease removed.');
    }
}
