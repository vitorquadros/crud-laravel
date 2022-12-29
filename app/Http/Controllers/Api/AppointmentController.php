<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;

class AppointmentController extends Controller
{

    private $appointment;
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }


    public function index()
    {
        $perPage = request()->has('per_page') ? (int) request()->per_page : null;
        $appointments = $this->appointment->paginate($perPage);
        $appointments->appends(['per_page' => $perPage]);
        return response()->json($appointments, 200);
    }

    public function store(AppointmentRequest $request)
    {
        try {
            if (!$request->user()->tokenCan('is-admin')) {
                return response()->json(['error' => 'Você não tem permissão para criar consultas!'], 403);
            }
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
