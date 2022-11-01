<?php

namespace App\Http\Requests\Employee;

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
            'Name'=>'string',
            'Surname'=>'string',
            'Patronymic'=>'string',
            'BirthDate'=>'date',
            'Sex'=>'boolean',
            'ClinicID'=>'int',
            'RoleID'=>'int',
            'OccupationID'=>'int',
            'WorkExperience'=>'string',
        ];
    }
}
