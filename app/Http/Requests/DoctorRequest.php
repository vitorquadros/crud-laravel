<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'crm' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
            'crm.required' => 'O campo CRM é obrigatório',
            'crm.min' => 'O campo CRM deve ter no mínimo 6 caracteres',
        ];
    }
}
