<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $modelDoctor = new Doctor();
        $doctors = $modelDoctor->all();
        return view('pages.doctor.index',
        ['doctors' => $doctors]);
    }

    public function show($id)
    {
        return view(
            'pages.doctor.single',
            ['doctor' => Doctor::find($id)]
        );
    }

    public function create()
    {
        return view('pages.doctor.create');
    }

    public function store(Request $request)
    {
        $newDoctor = $request->all();
        if (Doctor::create($newDoctor))
            return redirect('/dashboard');
        else dd("Erro ao criar médico!!");
    }

    public function edit($id)
    {
        return view('pages.doctor.edit', ['doctor' => Doctor::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $updatedDoctor = $request->all();

        if (!Doctor::find($id)->update($updatedDoctor))
            dd("Erro ao atualizar médico $id!");
        return redirect('/dashboard');
    }

    public function delete($id)
    {
        return view(
            'pages.doctor.delete',
            ['doctor' => Doctor::find($id)]
        );
    }

    public function remove(Request $request, $id)
    {
        if ($request->confirmar == 'Deletar')
            if (!Doctor::destroy($id))
                dd("Error ao deletar médico $id.");
        return redirect('/dashboard');
    }
}