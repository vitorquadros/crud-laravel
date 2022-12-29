<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }
   
    public function rules()
    {
        return [
            'name' => 'required | string | max:255 | min:5',
            'email' => 'required | email | unique:users',
            'password' => 'required | string | min:8',
            'is_admin' => 'nullable | boolean'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.string' => 'O nome deve ser uma string',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'name.min' => 'O nome deve ter no mínimo 5 caracteres',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'O email deve ser um email válido',
            'email.unique' => 'O email deve ser único',
            'password.required' => 'A senha é obrigatória',
            'password.string' => 'A senha deve ser uma string',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres',
        ];
    }
}
