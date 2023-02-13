<x-app-layout>
  @section('page-content')
  <div class="container-fluid">
    <div class="row mt-2 mb-2">
      <div class="col-md-12">
        <h1 class="text-dark-red">Registro de Empleado</h1>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12 mx-auto">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Formulario de registro</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('employee.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <div class="row mb-4">
                  <div class="col-md-12">
                    <label for="employee_name" class="text-dark">Nombre del empleado</label>
                    <input type="text" name="employee_name" class="form-control">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-12">
                    <label for="employee_position">Cargo del empleado</label>
                    <input type="text" name="employee_position" class="form-control">
                  </div>
                </div>
              </div>
              {{-- Espacio para componente de asignacion de equipo --}}
              <div class="row mb-4">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-dark">
                    Registrar Empleado
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</x-app-layout>