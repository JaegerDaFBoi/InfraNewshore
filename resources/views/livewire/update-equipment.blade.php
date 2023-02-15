<div>
    <div class="row mb-2">
        <div class="col-md-12">
            <label for="assign">¿Desea cambiar la asignación del equipo?</label>
            <input type="checkbox" name="assign" class="form-check-input" wire:model='assign'>
        </div>
    </div>
    @if ($assign)
        <div class="row mb-2">
            <div class="col-md-12">
                <label for="assign">Ver equipos previamente asignados</label>
                <input type="checkbox" name="selection" class="form-check-input" wire:model='selection'>
            </div>
        </div>
        @if ($selection)
            <div class="row mb-2">
                <div class="col-md-12">
                    <label for="assigned_equipments" class="text-dark">Equipos asignados previamente</label>
                    <select name="assigned_equipments" class="form-control">
                        @foreach ($assigned_equipments as $equipment)
                            @if ($equipment->fk_employee_id != $employee->employee_id)
                                <option value="{{ $equipment->equipment_id }}">{{ $equipment->model_name }} -
                                    {{ $equipment->serial }} Asignado a {{ $equipment->employee->employee_name }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        @else
            <div class="row mb-2">
                <div class="col-md-12">
                    <label for="assigned_equipments">Equipos disponibles</label>
                    <select name="assigned_equipments" class="form-control">
                        @foreach ($due_equipments as $equipment)
                            <option value="{{ $equipment->equipment_id }}">{{ $equipment->model_name }} -
                                {{ $equipment->serial }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif
    @endif
</div>
