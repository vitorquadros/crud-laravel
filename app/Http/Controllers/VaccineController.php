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
            return view('notfound', ['reason' => 'Vacinas', 'page' => 'vaccines']);
        }

        return view('vaccines',['vaccines' => $vaccines]);
    }

    public function show($id)
    {
        $vaccineModel = new Vaccine();
        $vaccine = Vaccine::find($id);
        
        return view('show_vaccine', ['vaccine' => $vaccine]);
    }

    public function create() {
        return view('create_vaccine');
    }

    public function store(Request $request) {
        $vaccineModel = new Vaccine();
        $vaccineModel->name = $request->name;
        $vaccineModel->expected_date = $request->expected_date;
        $vaccineModel->application_date = $request->application_date;
        $vaccineModel->is_future = $request['is_future'] === 'on' ? false : true;

        $vaccineModel->save();
        return redirect('/vaccines');
    }

    public function edit($id) {
        $vaccine = ['vaccine' => Vaccine::find($id)];
        return view('update_vaccine', $vaccine);
    }

    public function update(Request $request, $id) {
        $params = $request->all();
        $vaccine = Vaccine::find($id);
            
        $vaccine->name = $params['name'];
        $vaccine->expected_date = $params['expected_date'];
        $vaccine->application_date = $params['application_date'];

        if (!$vaccine->save()) {
            return response()->json(['error' => 'Não foi possível atualizar a vacina.'], 500);
        }

        return redirect('/vaccines');
    }

    public function destroy($id) {
        if (!Vaccine::destroy($id)) return response()->json(['error' => 'Não foi possível deletar a vacina.'], 500); 
        else return redirect('/vaccines');
    }
}
