@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Registrar Rol</h4>
        </div>

        <div class="card-body">

            <form method="POST" action="{{ route('roles.store') }}">
                @csrf

                <!-- NOMBRE -->
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del rol">
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" rows="3" placeholder="Descripción del rol"></textarea>
                </div>

                <!-- PERMISOS -->
                <div class="mb-3">
                    <label class="form-label">Permisos</label>
                    <input type="text" name="permiso" class="form-control" placeholder="Ej: crear, editar, eliminar">
                </div>

                <!-- BOTONES -->
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">
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