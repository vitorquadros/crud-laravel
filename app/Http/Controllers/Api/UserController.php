<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    public function store(UserRequest $request)
    {
        try {
            $user = $request->all();
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
            return response()->json(['message' => 'Usuário inserido com sucesso!' ,'user' => User::create($user)], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show(User $user)
    {
        return $user;
    }


    public function update(UserRequest $request, User $user)
    {
        try {
            if (!$request->user()->tokenCan('is-admin')) {
                return response()->json(['error' => 'Você não tem permissão para atualizar usuários!'], 403);
            }

            $user->update($request->all());
            return response()->json(['message' => 'Usuário atualizado com sucesso!' ,'user' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao atualizar usuário!'], 500);
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response()->json(['message' => 'Usuário excluído com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao excluir usuário!'], 500);
        }
    }
  
}
