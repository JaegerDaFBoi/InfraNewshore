<x-app-layout>
    @section('page-content')
        <div class="container-fluid">
            <div class="row mt-2 mb-2">
                <div class="col-md-12">
                    <h1 class="text-dark-red">Lista de empleados</h1>
                </div>
            </div>
            <div class="row mb-2 mt-2">
              <div class="col-md-6">
                <button class="btn bg-light"><a href="{{ route('employee.create') }}">Registrar Empleado</a></button>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre Empleado</th>
                                        <th>Cargo/Posición</th>
                                        <th>¿Tiene equipo asignado</th>
                                        <th>Equipo</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($employees as $employee)
                                    <tr>
                                      <td>{{ $employee->employee_id }}</td>
                                      <td>{{ $employee->employee_name }}</td>
                                      <td>{{ $employee->employee_position }}</td>
                                      @if (is_null($employee->fk_equipment))
                                        <td>No</td>
                                        <td>Sin equipo asignado</td>
                                        @else 
                                        <td>Si</td>
                                        <td>{{ $employee->equipment->model_name }}</td>
                                      @endif
                                      <td><button>Eliminar</button></td>
                                    </tr>
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
