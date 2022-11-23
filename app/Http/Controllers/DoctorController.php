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
        return view('doctors',['doctors' => $doctors]);
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
        // return response()->json($doctorModel);
    }

    public function update($id) {
        $doctorModel = Doctor::find($id);
        if ($doctorModel) {
            $params = Request::all();
            $doctorModel->update($params);
            return response()->json($doctorModel);
        }

            return response()->json('Usuário não encontrado');
    }

    public function delete($id) {
            $doctor = Doctor::find($id);
            if ($doctor) {
                $doctor->forceDelete();
                return;
            }

            return view('notfound', ['reason' => 'Usuário']);


    }
}
