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
            return view('notfound', ['reason' => 'Consultas']);
        }
        
        return view('appointments',['appointments' => $appointments]);
    }

    public function show($id)
    {
        $appointmentModel = new Appointment();
        $appointment = Appointment::find($id);
        
        return view('show_appointment', ['appointment' => $appointment]);
    }

    public function store(Request $request) {
        $appointmentModel = new Appointment();
        $appointmentModel->description = $request->description;
        $appointmentModel->date = $request->date;
        $appointmentModel->type = $request->type;

        $appointmentModel->save();
        return response()->json($appointmentModel);
    }
}
