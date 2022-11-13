<?php

namespace App\Http\Requests\ClinicalData;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'visit_id'=>'string',
            'main_diag'=>'string',
            'Aortic_dissection'=>'tinyint',
            'intramural_hematoma'=>'tinyint',
            'aortic_rupture'=>'tinyint',
            'patient_state'=>'string',
            'pain_beh_stern'=>'tinyint',
            'interscap_reg_pain'=>'string',
            'conscious_loss'=>'string',
            'low_extrem_ischemia'=>'string',
            'user_id'=>'int',
            'version'=>'int',
            'date'=>'date',
        ];
    }
}
