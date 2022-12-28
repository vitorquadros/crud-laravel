<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $modelAppointment = new Appointment();
        $appointments = $modelAppointment->all();
        return view('pages.appointment.index',
        ['appointments' => $appointments]);
    }

    public function show($id)
    {
        return view(
            'pages.appointment.single',
            ['appointment' => Appointment::find($id)]
        );
    }

    public function create()
    {
        return view('pages.appointment.create');
    }

    public function store(Request $request)
    {
        $newAppointment = $request->all();
        if (Appointment::create($newAppointment))
            return redirect('/appointments');
        else dd("Erro ao criar consulta!!");
    }

    public function edit($id)
    {
        return view('pages.appointment.edit', ['appointment' => Appointment::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $updatedAppointment = $request->all();

        if (!Appointment::find($id)->update($updatedAppointment))
            dd("Erro ao atualizar consulta $id!");
        return redirect('/dashboard');
    }

    public function delete($id)
    {
        return view(
            'pages.appointment.delete',
            ['appointment' => Appointment::find($id)]
        );
    }

    public function remove(Request $request, $id)
    {
        if ($request->confirmar == 'Deletar')
            if (!Appointment::destroy($id))
                dd("Error ao deletar consulta $id.");
        return redirect('/appointments');
    }
}