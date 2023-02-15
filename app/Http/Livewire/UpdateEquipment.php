<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\Equipment;
use Livewire\Component;

class UpdateEquipment extends Component
{

    public $assign = false;
    public $selection = false;
    public $due_equipments;
    public $assigned_equipments;
    public $employee;


    public function mount(Employee $employee)
    {
        $this->employee = $employee;
        $this->due_equipments = Equipment::where('is_assigned', 0)->get();
        $this->assigned_equipments = Equipment::where('is_assigned', 1)->get();
        
    }

    public function render()
    {
        return view('livewire.update-equipment');
    }
}
