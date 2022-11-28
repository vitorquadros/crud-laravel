<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccineModel = new Vaccine();
        $vaccines = $vaccineModel->all();
        if ($vaccines->count() < 1) {
            return view('notfound', ['reason' => 'Vacinas']);
        }

        return view('vaccines',['vaccines' => $vaccines]);
    }

    public function show($id)
    {
        $vaccineModel = new Vaccine();
        $vaccine = Vaccine::find($id);
        
        return view('show_vaccine', ['vaccine' => $vaccine]);
    }

    public function store(Request $request) {
        $vaccineModel = new Vaccine();
        $vaccineModel->name = $request->name;
        $vaccineModel->expected_date = $request->expected_date;
        $vaccineModel->application_date = $request->application_date;
        $vaccineModel->is_future = $request->is_future;

        $vaccineModel->save();
        return response()->json($vaccineModel);
    }
}
