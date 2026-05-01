@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Crear Usuario</h4>

            <a href="{{ route('users.index') }}" class="btn btn-light btn-sm">
                Volver
            </a>
        </div>

        <div class="card-body">

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="row">

                    <!-- NOMBRE -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <!-- APELLIDO -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" required>
                    </div>

                    <!-- CÉDULA -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Cédula</label>
                        <input type="text" name="cedula" class="form-control" required>
                    </div>

                    <!-- DIRECCIÓN -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="direccion" class="form-control" required>
                    </div>

                    <!-- EMAIL -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <!-- ROL -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Rol</label>

                        <select name="role_id" class="form-select" required>
                            <option value="">Seleccione un rol</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">
                                    {{ $role->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- CONTRASEÑA -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                </div>

                <!-- BOTONES -->
                <div class="d-flex justify-content-end gap-2 mt-3">

                    <a href="{{ route('users.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-success">
                        Guardar
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection