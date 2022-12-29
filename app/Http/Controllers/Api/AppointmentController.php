<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{

    private $appointment;
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }


    public function index()
    {
        return $this->appointment->all();
    }

    public function store(Request $request)
    {
        try {
            $appointment = $this->appointment->create($request->all());
            return response()->json(['message' => 'Consulta inserida com sucesso!' ,'appointment' => $appointment], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao criar consulta!'], 500);
        }
    }

 
    public function show(Appointment $appointment)
    {
        return $appointment;
    }


    public function update(Request $request, $id)
    {
        try {
            $appointment = $this->appointment->findOrFail($id);
            $appointment->update($request->all());
            return response()->json(['message' => 'Consulta atualizada com sucesso!' ,'appointment' => $appointment], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao atualizar consulta!'], 500);
        }
    }

 
    public function destroy($id)
    {
        try {
            $appointment = $this->appointment->findOrFail($id);
            $appointment->delete();
            return response()->json(['message' => 'Consulta excluída com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao excluir consulta!'], 500);
        }
    }
}
