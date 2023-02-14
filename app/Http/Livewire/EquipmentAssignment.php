<?php

namespace App\Http\Livewire;

use App\Models\Equipment;
use Livewire\Component;

class EquipmentAssignment extends Component
{
    public $assign = false;
    public $equipments;

    public function mount()
    {
        $this->equipments = Equipment::where('is_assigned', 0)->get();
    }

    public function render()
    {
        return view('livewire.equipment-assignment');
    }
}
