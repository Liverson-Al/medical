<?php

namespace App\Http\Requests\Echocardiography;

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
            'LVEF'=>'string',
            'LVEDV'=>'string',
            'LVESV'=>'string',
            'AscAorticD'=>'string',
            'ValsalvaSinusesD'=>'string',
            'AVLeafletN'=>'string',
            'AVAnnuFibrD'=>'string',
            'PeakSpeedAV'=>'string',
            'AVPressureGradientMax'=>'string',
            'AVPressureGradientMean'=>'string',
            'AorticRegurgitationDegree'=>'tinyint',
            'PulmArterySysBP'=>'string',
            'MitralInsuffStenPrD'=>'string',
            'Tricuspi'=>'string',
            'AtrialSeptalDefectPr'=>'string',
            'user_id'=>'int',
            'version'=>'int',
            'date'=>'date',
        ];
    }
}
