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
        // return response()->json($doctors);
        return view('doctors',['doctors' => $doctors]);
    }

    public function show($id)
    {
        $doctorModel = new Doctor();
        $doctor = Doctor::find($id);
        
        return view('show_doctor', ['doctor' => $doctor]);
    }

    public function store(Request $request) {
        $doctorModel = new Doctor();
        $doctorModel->name = $request->name;
        $doctorModel->crm = $request->crm;
        $doctorModel->email = $request->email;
        $doctorModel->password = $request->password;

        $doctorModel->save();
        return response()->json($doctorModel);
    }

    public function update(Request $request) {

    }

    public function delete($id) {
        
    }
}
