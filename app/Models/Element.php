<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $table = 'elements';
    protected $primaryKey = 'element_id';

    public function employee()
    {
        return $this->belongsToMany(Employee::class, 'elements_employee', 'element_id', 'employee_id');
    }
}
