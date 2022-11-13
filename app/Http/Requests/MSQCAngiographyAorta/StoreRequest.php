<?php

namespace App\Http\Requests\MSQCAngiographyAorta;

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
            'VisitPatientID'=>'string',
            'AV_annulus_fibrosis'=>'int',
            'sinuses_valsalva'=>'int',
            'sinotubular_junction'=>'int',
            'asc_aorta_pulm_art_bif'=>'int',
            'asc_aorta_before_BCS'=>'int',
            'AorticArchBeforeCCA'=>'int',
            'aorticArchBeforeLSA'=>'int',
            'aorticlsthmus'=>'int',
            'desc_aorta_middle_part'=>'int',
            'abdominal_aorta'=>'int',
            'user_id'=>'int',
            'version'=>'int',
            'date'=>'date',
        ];
    }
}
