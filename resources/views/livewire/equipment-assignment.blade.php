<div>
    <div class="row mb-2">
        <div class="col-md-12">
            <label for="assign">¿Desea asignar equipo?</label>
            <input type="checkbox" name="assign" class="form-check-input" wire:model='assign'>
        </div>
    </div>
    @if ($assign)
    <div class="row mb-2">
        <div class="col-md-12">
            <label for="due_equipments">Equipos disponibles</label>
            <select name="due_equipments" class="form-control">
                @foreach ($equipments as $equipment)
                    <option value="{{ $equipment->equipment_id }}">{{ $equipment->model_name }} - {{ $equipment->serial }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @endif
</div>
