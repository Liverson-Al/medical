<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'=>'email',
            'password'=>'string',
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
