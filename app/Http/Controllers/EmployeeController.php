<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->employee_name = $request->input('employee_name');
        $employee->employee_position = $request->input('employee_position');
        $assigned_equipment = $request->input('due_equipments');
        $employee->save();
        if (!empty($assigned_equipment)) {
            $equipment_to_update = Equipment::find($assigned_equipment);
            $equipment_to_update->fk_employee_id = $employee->employee_id;
            $equipment_to_update->is_assigned = true;
            $equipment_to_update->save();
        }
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->employee_name = $request->input('employee_name');
        $employee->employee_position = $request->input('employee_position');
        $selected_equipment = $request->input('assigned_equipments');
        $equipment = Equipment::find($selected_equipment);
        if (!is_null($equipment)) {
            if ($equipment->is_assigned == true) {
                $equipment->fk_employee_id = null;
                $equipment->fk_employee_id = $employee->employee_id;
            } else {
                $equipment->fk_employee_id = $employee->employee_id;
                $equipment->is_assigned = true;
            }
            $equipment->save();
        }
        $employee->save();
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $equipment = $employee->equipment;
        $equipment->fk_employee_id = null;
        $equipment->is_assigned = false;
        $equipment->save();
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
