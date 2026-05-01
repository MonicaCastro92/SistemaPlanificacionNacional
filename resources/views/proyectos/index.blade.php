<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Proyectos</title>
</head>
<body>

    <h1>Lista de Proyectos</h1>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <br>

    <a href="{{ route('proyectos.create') }}">+ Nuevo Proyecto</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->nombre }}</td>
                    <td>{{ $proyecto->descripcion }}</td>
                    <td>{{ $proyecto->estado }}</td>
                    <td>
                        {{-- Botón editar --}}
                        <a href="{{ route('proyectos.edit', $proyecto->id) }}">Editar</a>

                        {{-- Botón eliminar --}}
                        <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este proyecto?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay proyectos registrados</td>
                </tr>
            @endforelse

        </tbody>
    </table>

</body>
</html>