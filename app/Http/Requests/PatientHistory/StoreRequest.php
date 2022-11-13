<?php

namespace App\Http\Requests\PatientHistory;

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
            'id'=>'string',
            'dis_heart_blood_vessels_first_line_relatives'=>'tinyint',
            'relatives_conn_tiss_dysplasia'=>'tinyint',
            'heart_surgeries_pr'=>'tinyint',
            'heart_surgeries_type'=>'string',
            'genetic_analysis_pr'=>'tinyint',
            'genetic_analysis_res'=>'string',
            'smoking_experience'=>'int',
            'alko_consumption_experince'=>'int',
            'drug_consumption_experience'=>'int',
            'occupational_hazards'=>'string',
            'sports'=>'string',
            'disease_knowledge'=>'date',
            'works'=>'tinyint',
            'blood_thin_drugs'=>'tinyint',
            'disaggregants'=>'tinyint',
            'user_id'=>'int',
            'version'=>'int',
            'date'=>'date',
        ];
    }
}
