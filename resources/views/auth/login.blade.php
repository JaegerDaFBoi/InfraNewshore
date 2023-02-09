<x-guest-layout>
    @section('page-content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <x-jet-validation-errors class="mb-4" />
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card bg-gray-blue mx-auto mt-5 w-25 text-center border-dark-red">
                        <div class="card-header">
                            <h2>Iniciar Sesión</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="mt-3">Correo Electrónico</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Correo electrónico" required autofocus autocomplete="username" />
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="fa-solid fa-envelope-circle-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <label for="password" class="mt-3">Contraseña</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="********" required autocomplete="current-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon3">
                                                <i class="fa-solid fa-key"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-check mt-3">
                                        <label for="remember_me" class="text-left">Recordar mi usuario</label>
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember_me">    
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-dark">
                                                    Olvidaste tu contraseña?
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-rounded bg-dark-red text-light">
                                                Iniciar Sesión
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
