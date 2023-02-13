<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'employee_id';

    public function equipment() 
    {
        return $this->hasOne(Equipment::class, 'fk_equipment_id', 'employee_id');
    }

    public function elements()
    {
        return $this->belongsToMany(Element::class, 'elements_employee', 'employee_id', 'element_id');
    }
}
