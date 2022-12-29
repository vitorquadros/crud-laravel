<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'description' => 'required|string|max:255|min:5',
            'type' => 'required|string|max:20',
            'date' => 'required|date',
            'doctor_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'A descrição é obrigatória',
            'description.string' => 'A descrição deve ser uma string',
            'description.max' => 'A descrição deve ter no máximo 255 caracteres',
            'description.min' => 'A descrição deve ter no mínimo 5 caracteres',
            'type.required' => 'A Área da consulta é obrigatório',
            'type.string' => 'A Área da consulta deve ser uma string',
            'type.max' => 'A Área da consulta deve ter no máximo 20 caracteres',
            'date.required' => 'A data é obrigatória',
            'date.date' => 'A data deve ser uma data válida',
            'doctor_id.required' => 'O médico é obrigatório',
            'doctor_id.integer' => 'O médico deve ser um número inteiro e um ID de um médico válido',
        ];
    }
}
