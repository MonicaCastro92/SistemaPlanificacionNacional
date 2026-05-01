@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header bg-warning">
            <h4 class="mb-0">Editar Rol</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- NOMBRE -->
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text"
                           name="nombre"
                           value="{{ $role->nombre }}"
                           class="form-control"
                           required>
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <input type="text"
                           name="descripcion"
                           value="{{ $role->descripcion }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Permisos</label>
                    <input type="text"
                           name="permiso"
                           value="{{ $role->permiso }}"
                           class="form-control">
                </div>

                <!-- BOTONES -->
                <div class="d-flex justify-content-between">

                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">
                        Volver
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