<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Doctors extends Component
{
    public $doctors;
    public $orderAsc = true;
    public $orderColumn = 'id';

    public $nome;
    public $crm;
    public $email;

    public function render()
    {
        return view('livewire.doctors');
    }

    public function save()
    {
        $doctor = [
            "name" => $this->name,
            "crm" => $this->crm,
            "email" => $this->email
        ];

        try {
            Doctor::create($doctor);
            $this->clear();
            $this->orderAsc = false;
            $this->orderBy();
        } catch (Exception $e) {
            dd('Erro ao inserir');
        }
    }

    public function update($id)
    {

        $doctor = [
            'name' => $this->name,
            'crm' => $this->crm,
            'email' => $this->email
        ];

        Doctor::findOrFail($id)->update($doctor);
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
        $this->clear();
    }

    private function clear()
    {
        $this->name = '';
        $this->crm = '';
        $this->email = '';
    }

    public function remove($id)
    {
        if (!Doctor::destroy($id))
            return "Erro!";
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
    }

    public function orderBy($column = 'id')
    {
        $this->orderColumn = $column;
        $this->doctors = Doctor::orderBy(
            $this->orderColumn,
            $this->orderAsc ? 'asc' : 'desc'
        )->get();
        $this->orderAsc = !$this->orderAsc;

        Log::channel('stderr')->info($this->orderAsc ? 'asc' : 'desc');
    }

    public function orderByName(){
        $this->orderBy('name');
    }

    public function orderByCrm()
    {
        $this->orderBy('crm');
    }
}