<?php


namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctorModel = new Doctor();
        $doctors = $doctorModel->all();
        if ($doctors->count() < 1) {
            return view('notfound', ['reason' => 'Médicos', 'page' => 'doctors']);
        }

        return view('doctors', ['doctors' => $doctors]);
    }

    public function show($id)
    {
        $doctorModel = new Doctor();
        $doctor = Doctor::find($id);
        
        return view('show_doctor', ['doctor' => $doctor]);
    }

    public function create() {
        return view('create_doctor');
    }

    public function store(Request $request) {
        $doctorModel = new Doctor();
        $doctorModel->name = $request->name;
        $doctorModel->crm = $request->crm;
        $doctorModel->email = $request->email;
        $doctorModel->password = $request->password;

        $doctorModel->save();
        return redirect('/doctors');
    }

    public function edit($id) {
        $doctor = ['doctor' => Doctor::find($id)];
        return view('update_doctor', $doctor);
    }

    public function update(Request $request, $id) {
        $params = $request->all();
        $doctor = Doctor::find($id);
            
        $doctor->name = $params['name'];
        $doctor->crm = $params['crm'];
        $doctor->email = $params['email'];
        $doctor->password = $params['password'];

        if (!$doctor->save()) {
            return response()->json(['error' => 'Não foi possível atualizar o médico.'], 500);
        }

        return redirect('/doctors');
    }

    public function destroy($id) {
        if (!Doctor::destroy($id)) return response()->json(['error' => 'Não foi possível deletar o médico.'], 500); 
        else return redirect('/doctors');
    }
}
