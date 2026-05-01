@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Listado de Usuarios</h3>

        <a href="{{ route('users.create') }}" class="btn btn-primary">
            + Crear Usuario
        </a>
    </div>

    <!-- 🔍 BUSCADOR -->
    <form method="GET" action="{{ route('users.index') }}" class="mb-3">
        <div class="input-group">

            <input type="text"
                   name="buscar"
                   value="{{ request('buscar') }}"
                   class="form-control"
                   placeholder="Buscar por nombre, apellido o cédula...">

            <button class="btn btn-outline-primary" type="submit">
                Buscar
            </button>

        </div>
    </form>

    <div class="card shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-striped table-bordered align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cédula</th>
                            <th>Dirección</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->apellido }}</td>
                            <td>{{ $user->cedula }}</td>
                            <td>{{ $user->direccion }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->nombre ?? 'Sin rol' }}</td>

                            <td class="d-flex gap-2">

                                <a href="{{ route('users.edit', $user->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Editar
                                </a>

                                <form action="{{ route('users.destroy', $user->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('¿Eliminar usuario?')">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>

                                </form>

                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                No se encontraron usuarios
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection