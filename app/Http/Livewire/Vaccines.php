<?php

namespace App\Http\Livewire;

use App\Models\Vaccine;
use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Vaccines extends Component
{
    public $vaccines;
    public $orderAsc = true;
    public $orderColumn = 'id';

    public $name;
    public $expected_date;
    public $application_date;

    public function render()
    {
        return view('livewire.vaccines');
    }

    public function save()
    {
        $vaccine = [
            "name" => $this->name,
            "expected_date" => $this->expected_date,
            "application_date" => $this->application_date
        ];

        try {
            Vaccine::create($vaccine);
            $this->clear();
            $this->orderAsc = false;
            $this->orderBy();
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function update($id)
    {

        $vaccine = [
            'name' => $this->name,
            'expected_date' => $this->expected_date,
            'application_date' => $this->application_date
        ];

        Vaccine::findOrFail($id)->update($vaccine);
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
        $this->clear();
    }

    private function clear()
    {
        $this->name = '';
        $this->expected_date = '';
        $this->application_date = '';
    }

    public function remove($id)
    {
        if (!Vaccine::destroy($id))
            return "Erro!";
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
    }

    public function orderBy($column = 'id')
    {
        $this->orderColumn = $column;
        $this->vaccines = Vaccine::orderBy(
            $this->orderColumn,
            $this->orderAsc ? 'asc' : 'desc'
        )->get();
        $this->orderAsc = !$this->orderAsc;

        Log::channel('stderr')->info($this->orderAsc ? 'asc' : 'desc');
    }

    public function orderByName(){
        $this->orderBy('name');
    }
}