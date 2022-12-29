<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccineRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'name' => 'required',
            'expected_date' => 'required|date',
            'application_date' => 'date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'expected_date.required' => 'O campo data de aplicação é obrigatório',
            'expected_date.date' => 'O campo data de aplicação deve ser uma data válida',
            'application_date.date' => 'O campo data de aplicação deve ser uma data válida',
        ];
    }
}
