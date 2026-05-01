<table border="1" width="100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Código</th>
            <th>Estado</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Acciones</th> <!-- 🔥 NUEVO -->
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

                <!-- 🔥 BOTONES -->
                <td>
                    <a href="{{ route('plans.edit', $plan->id) }}">
                        ✏️ Editar
                    </a>

                    <br>

                    <form action="{{ route('plans.destroy', $plan->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" onclick="return confirm('¿Eliminar este plan?')">
                            🗑️ Eliminar
                        </button>
                    </form>
                </td>

            </tr>
        @empty
            <tr>
                <td colspan="6">No hay planes registrados</td>
            </tr>
        @endforelse
    </tbody>
</table>