<?php

namespace App\Http\Requests\ConcomDisease;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'patient_id'=>'int',
            'cor_heart_disease_clinic'=>'string',
            'acute_myocardial_infarction_num'=>'int',
            'current_myocardial_infarction'=>'tinyint',
            'diabetes'=>'tinyint',
            'diabetes_type'=>'string',
            'cerebrovascular_disease'=>'tinyint',
            'BCAStenosis'=>'tinyint',
            'transient_ischemic_attack'=>'tinyint',
            'ACVA'=>'tinyint',
            'chronic_lung_disease'=>'tinyint',
            'prev_infectious_disease'=>'tinyint',
            'rhythm_conclusion_disturbances'=>'tinyint',
            'thyroid_disease'=>'tinyint',
            'acute_renal_failure'=>'tinyint',
            'chronic_renal_failure'=>'tinyint',
            'oncology'=>'tinyint',
            'hematological_disease'=>'tinyint',
            'pulmonary_embolism'=>'tinyint',
            'chest_wall_injury'=>'tinyint',
            'aortic_valve'=>'string',
            'acquired_AV_disease'=>'tinyint',
            'AV_degenerative_lesions'=>'tinyint',
            'AV_infectious_lesions'=>'tinyint',
            'AVW_traumatic_lesions'=>'tinyint',
            'user_id'=>'int',
            'version'=>'int',
            'date'=>'date',
        ];
    }
}
