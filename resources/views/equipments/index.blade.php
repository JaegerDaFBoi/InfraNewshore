<x-app-layout>
  @section('page-content')
  <div class="container-fluid">
    <div class="row mb-2 mt-2">
      <div class="col-md-12">
        <h1 class="text-dark-red">Lista de Equipos</h1>
      </div>
    </div>
    <div class="row mb-2 mt-2">
      <div class="col-md-6">
        <button class="btn bg-light"><a href="">Registrar Nuevo Equipo</a></button>
      </div>
    </div>
    <div class="row mb-2 mt-2">
      <div class="col-md-12 mx-auto">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-hover table-striped table-dark caption-top">
              <caption>Equipos asignados</caption>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Modelo</th>
                  <th>Serial</th>
                  <th>Procesador</th>
                  <th>Memoria RAM</th>
                  <th>Sistema Operativo</th>
                  <th>Almacenamiento</th>
                  <th>Asignado a</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($equipments as $equipment)
                  @if ($equipment->is_assigned == true)
                    <tr>
                      <td>{{ $equipment->equipment_id }}</td>
                      <td>{{ $equipment->model_name }}</td>
                      <td>{{ $equipment->serial }}</td>
                      <td>{{ $equipment->processor }}</td>
                      <td>{{ $equipment->ram_memory }}</td>
                      <td>{{ $equipment->operative_system }}</td>
                      <td>{{ $equipment->storage_disk_type }} - {{ $equipment->storage_capacity }}</td>
                      <td>{{ $equipment->employee->employee_name }}</td>
                      <td>
                        <button>Editar</button>
                        <button>Eliminar</button>
                      </td>
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-2 mt-2">
      <div class="col-md-12 mx-auto">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-hover table-striped table-dark caption-top">
              <caption>Equipos disponibles</caption>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Modelo</th>
                  <th>Serial</th>
                  <th>Procesador</th>
                  <th>Memoria RAM</th>
                  <th>Sistema Operativo</th>
                  <th>Almacenamiento</th>
                  <th>¿Equipo averiado?</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($equipments as $equipment)
                  @if ($equipment->is_assigned == false)
                    <tr>
                      <td>{{ $equipment->equipment_id }}</td>
                      <td>{{ $equipment->model_name }}</td>
                      <td>{{ $equipment->serial }}</td>
                      <td>{{ $equipment->processor }}</td>
                      <td>{{ $equipment->ram_memory }}</td>
                      <td>{{ $equipment->operative_system }}</td>
                      <td>{{ $equipment->storage_disk_type }} - {{ $equipment->storage_capacity }}</td>
                      @if ($equipment->is_damaged == false)
                        <td>No</td>
                        @else
                        <td>Si</td>
                      @endif
                      <td>
                        <button>Editar</button>
                        <button>Eliminar</button>
                      </td>
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</x-app-layout>