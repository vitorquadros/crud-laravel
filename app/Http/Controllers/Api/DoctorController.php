<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class DoctorController extends Controller
{

    private $doctor;
    public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }
   
    public function index()
    {
        return $this->doctor->all();
    }

    
    public function store(Request $request)
    {
        try {
            if (!$request->user()->tokenCan('is-admin')) {
                return response()->json(['error' => 'Você não tem permissão para criar médicos!'], 403);
            }
            
            $doctor = $this->doctor->create($request->all());
            return response()->json(['message' => 'Médico inserido com sucesso!' ,'doctor' => $doctor], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao criar médico!'], 500);
        }
    }

   
    public function show(Doctor $doctor)
    {
        return $doctor;
    }

  
    public function update(Request $request, $id)
    {
        try {
            $doctor = $this->doctor->findOrFail($id);
            $doctor->update($request->all());
            return response()->json(['message' => 'Médico atualizado com sucesso!' ,'doctor' => $doctor], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao atualizar médico!'], 500);
        }
    }

  
    public function destroy($id)
    {
        try {
            $doctor = $this->doctor->findOrFail($id);
            $doctor->delete();
            return response()->json(['message' => 'Médico excluído com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao excluir médico!'], 500);
        }
    }

    public function appointments($id) {
        $doctor = $this->doctor->with('appointments')->find($id);
        return $doctor;
    }   
}
