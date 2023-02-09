<x-guest-layout>
    @section('page-content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <x-jet-validation-errors class="mb-4" />
                    <div class="card bg-gray-blue mx-auto mt-5 w-25 text-center border-dark-red">
                        <div class="card-header">
                            <h2>Registro de usuario</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nombre Completo</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Nombre" required autofocus autocomplete="name">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <label for="email">Correo Electrónico</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="correo@ejemplo.com" required autocomplete="username">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="fa-solid fa-envelope-circle-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <label for="password" class="mt-3">Contraseña</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="********" required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon3">
                                                <i class="fa-solid fa-key"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <label for="password_confirmation" class="mt-3">Confirmar Contraseña</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                                            placeholder="********" required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon3">
                                                <i class="fa-solid fa-unlock-keyhole"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="{{ route('login') }}" class="text-dark">
                                                ¿Ya estas registrado?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-rounded bg-dark-red text-light">
                                                Registrarse
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
</x-guest-layout>
