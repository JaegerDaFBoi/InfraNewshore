<x-app-layout>
  @section('page-content')
  <div class="container-fluid">
    <div class="row mt-2 mb-2">
      <div class="col-md-12">
        <h1 class="text-dark-red">Editar Empleado</h1>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12 mx-auto">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Formulario de edición</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('employee.update', $employee) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="row mb-4">
                  <div class="col-md-12">
                    <label for="employee_name" class="text-dark">Nombre del Empleado</label>
                    <input type="text" name="employee_name" class="form-control" value="{{ $employee->employee_name }}">
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-12">
                    <label for="employee_position">Cargo del empleado</label>
                    <input type="text" name="employee_position" class="form-control" value="{{ $employee->employee_position }}">
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-dark">
                      Actualizar Empleado
                    </button>
                  </div>
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