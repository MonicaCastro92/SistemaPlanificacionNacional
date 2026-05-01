@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Listado de Planes</h3>

        <a href="{{ route('plans.create') }}" class="btn btn-primary">
            + Crear Plan
        </a>
    </div>

    <!-- 🔍 BUSCADOR -->
    <form method="GET" action="{{ route('plans.index') }}" class="mb-3">
        <div class="input-group">

            <input type="text"
                   name="buscar"
                   value="{{ request('buscar') }}"
                   class="form-control"
                   placeholder="Buscar por nombre o código...">

            <button class="btn btn-outline-primary">
                Buscar
            </button>

        </div>
    </form>

    <div class="card shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-striped table-bordered align-middle w-100">

                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Código</th>
                            <th>Estado</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($plans as $plan)
                        <tr>
                            <td>{{ $plan->nombre }}</td>
                            <td>{{ $plan->id_plan }}</td>
                            <td>{{ $plan->estado }}</td>
                            <td>{{ $plan->fecha_inicio }}</td>
                            <td>{{ $plan->fecha_fin }}</td>

                            <td class="d-flex gap-2">

                                <a href="{{ route('plans.edit', $plan->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Editar
                                </a>

                                <form action="{{ route('plans.destroy', $plan->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('¿Eliminar este plan?')">

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
                            <td colspan="6" class="text-center">
                                No hay planes registrados
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