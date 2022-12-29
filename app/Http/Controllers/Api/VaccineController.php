<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vaccine;
use App\Http\Requests\VaccineRequest;

class VaccineController extends Controller
{
    
        private $vaccine;
        public function __construct(Vaccine $vaccine)
        {
            $this->vaccine = $vaccine;
        }
    
        public function index()
        {
            return $this->vaccine->all();
        }
    
        public function store(VaccineRequest $request)
        {
            try {
                if (!$request->user()->tokenCan('is-admin')) {
                    return response()->json(['error' => 'Você não tem permissão para criar vacinas!'], 403);
                }
                
                $vaccine = $this->vaccine->create($request->all());
                return response()->json(['message' => 'Vacina inserida com sucesso!' ,'vaccine' => $vaccine], 201);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Erro ao criar vacina!'], 500);
            }
        }
    
        public function show(Vaccine $vaccine)
        {
            return $vaccine;
        }
    
        public function update(VaccineRequest $request, $id)
        {
            try {
                if (!$request->user()->tokenCan('is-admin')) {
                    return response()->json(['error' => 'Você não tem permissão para atualizar vacinas!'], 403);
                }

                $vaccine = $this->vaccine->findOrFail($id);
                $vaccine->update($request->all());
                return response()->json(['message' => 'Vacina atualizada com sucesso!' ,'vaccine' => $vaccine], 200);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Erro ao atualizar vacina!'], 500);
            }
        }
    
        public function destroy($id)
        {
            try {
                $vaccine = $this->vaccine->findOrFail($id);
                $vaccine->delete();
                return response()->json(['message' => 'Vacina excluída com sucesso!'], 200);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Erro ao excluir vacina!'], 500);
            }
        }
}
