<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    public function index()
    {
        $modelVaccine = new Vaccine();
        $vaccines = $modelVaccine->all();
        return view('pages.vaccine.index',
        ['vaccines' => $vaccines]);
    }

    public function show($id)
    {
        return view(
            'pages.vaccine.single',
            ['vaccine' => Vaccine::find($id)]
        );
    }

    public function create()
    {
        return view('pages.vaccine.create');
    }

    public function store(Request $request)
    {
        $newVaccine = $request->all();
        if (Vaccine::create($newVaccine))
            return redirect('/vaccines');
        else dd("Erro ao criar vacina!!");
    }

    public function edit($id)
    {
        return view('pages.vaccine.edit', ['vaccine' => Vaccine::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $updatedVaccine = $request->all();

        if (!Vaccine::find($id)->update($updatedVaccine))
            dd("Erro ao atualizar vacina $id!");
        return redirect('/vaccines');
    }

    public function delete($id)
    {
        return view(
            'pages.vaccine.delete',
            ['vaccine' => Vaccine::find($id)]
        );
    }

    public function remove(Request $request, $id)
    {
        if ($request->confirmar == 'Deletar')
            if (!Vaccine::destroy($id))
                dd("Error ao deletar vacina $id.");
        return redirect('/vaccines');
    }
}