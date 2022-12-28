<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Appointments extends Component
{
    public $appointments;
    public $orderAsc = true;
    public $orderColumn = 'id';

    public $description;
    public $type;
    public $date;

    public function render()
    {
        return view('livewire.appointments');
    }

    public function save()
    {
        $appointment = [
            "description" => $this->description,
            "date" => $this->date,
            "type" => $this->type
        ];

        try {
            Appointment::create($appointment);
            $this->clear();
            $this->orderAsc = false;
            $this->orderBy();
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function update($id)
    {

        $appointment = [
            'description' => $this->description,
            'date' => $this->date,
            'type' => $this->type
        ];

        Appointment::findOrFail($id)->update($appointment);
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
        if (!Appointment::destroy($id))
            return "Erro!";
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
    }

    public function orderBy($column = 'id')
    {
        $this->orderColumn = $column;
        $this->appointments = Appointment::orderBy(
            $this->orderColumn,
            $this->orderAsc ? 'asc' : 'desc'
        )->get();
        $this->orderAsc = !$this->orderAsc;

        Log::channel('stderr')->info($this->orderAsc ? 'asc' : 'desc');
    }

    public function orderByDescription(){
        $this->orderBy('description');
    }

    public function orderByType()
    {
        $this->orderBy('type');
    }
}