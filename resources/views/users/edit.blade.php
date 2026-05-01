@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header bg-warning d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Editar Usuario</h4>

            <a href="{{ route('users.index') }}" class="btn btn-light btn-sm">
                Volver
            </a>
        </div>

        <div class="card-body">

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    <!-- NOMBRE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text"
                               name="name"
                               value="{{ $user->name }}"
                               class="form-control"
                               required>
                    </div>

                    <!-- APELLIDO -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text"
                               name="apellido"
                               value="{{ $user->apellido }}"
                               class="form-control"
                               required>
                    </div>

                    <!-- CÉDULA -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Cédula</label>
                        <input type="text"
                               name="cedula"
                               value="{{ $user->cedula }}"
                               class="form-control">
                    </div>

                    <!-- DIRECCIÓN -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text"
                               name="direccion"
                               value="{{ $user->direccion }}"
                               class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="text"
                               name="email"
                               value="{{ $user->email }}"
                               class="form-control">
                    </div>

                    <!-- ROL -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Rol</label>

                        <select name="role_id" class="form-select" required>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                    {{ $role->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="d-flex justify-content-between mt-3">

                    <a href="{{ route('users.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-success">
                        Actualizar
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection