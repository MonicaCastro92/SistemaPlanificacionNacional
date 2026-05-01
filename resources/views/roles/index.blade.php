@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between mb-3">
        <h3>Listado de Roles</h3>

        <a href="{{ route('roles.create') }}" class="btn btn-primary">
            Crear Rol
        </a>
    </div>

    <form class="mb-3" method="GET">
        <div class="input-group">
            <input class="form-control" name="buscar" placeholder="Buscar...">
            <button class="btn btn-outline-primary">Buscar</button>
        </div>
    </form>

    <table class="table table-striped table-bordered w-100">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Permiso</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->nombre }}</td>
                <td>{{ $role->descripcion }}</td>
                <td>{{ $role->permiso }}</td>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{ route('roles.edit', $role->id) }}">Editar</a>

                    <form style="display:inline;" method="POST" action="{{ route('roles.destroy', $role->id) }}">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection