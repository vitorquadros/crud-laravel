<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointmentModel = new Appointment();
        $appointments = $appointmentModel->all();
        if ($appointments->count() < 1) {
            return view('notfound', ['reason' => 'Consultas', 'page' => 'appointments']);
        }
        
        return view('appointments',['appointments' => $appointments]);
    }

    public function show($id)
    {
        $appointmentModel = new Appointment();
        $appointment = Appointment::find($id);
        
        return view('show_appointment', ['appointment' => $appointment]);
    }

    public function create() {
        return view('create_appointment');
    }


    public function store(Request $request) {
        $appointmentModel = new Appointment();
        $appointmentModel->description = $request->description;
        $appointmentModel->date = $request->date;
        $appointmentModel->type = $request->type;

        $appointmentModel->save();
        return redirect('/appointments');
    }

    public function edit($id) {
        $appointment = ['appointment' => Appointment::find($id)];
        return view('update_appointment', $appointment);
    }

    public function update(Request $request, $id) {
        $params = $request->all();
        $appointment = Appointment::find($id);
            
        $appointment->description = $params['description'];
        $appointment->date = $params['date'];
        $appointment->type = $params['type'];

        if (!$appointment->save()) {
            return response()->json(['error' => 'Não foi possível atualizar a consulta.'], 500);
        }

        return redirect('/appointments');
    }

    public function destroy($id) {
        if (!Appointment::destroy($id)) return response()->json(['error' => 'Não foi possível deletar a consulta.'], 500); 
        else return redirect('/appointments');
    }
}
