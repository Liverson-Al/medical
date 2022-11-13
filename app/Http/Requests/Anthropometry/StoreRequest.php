<?php

namespace App\Http\Requests\Anthropometry;

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
            'patient_id'=>'int',
            'height'=>'float',
            'weight'=>'float',
            'BMI'=>'int',
            'BSA'=>'int',
            'DBM'=>'string',
            'CTDS'=>'tinyint',
            'Marfan'=>'tinyint',
            'EhlersDanlos'=>'tinyint',
            'LoeysDitz'=>'tinyint',
            'Terner'=>'tinyint',
            'Noonan'=>'tinyint',
            'user_id'=>'int',
            'version'=>'int',
            'date'=>'date',
        ];
    }
}
