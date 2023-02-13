<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';
    protected $primaryKey = 'equipment_id';

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'equipment_id', 'employee_id');
    }
}
