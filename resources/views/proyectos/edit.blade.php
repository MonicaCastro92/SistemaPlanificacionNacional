<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proyecto</title>
</head>
<body>

    <h1>Editar Proyecto</h1>

    {{-- Mostrar errores --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ old('nombre', $proyecto->nombre) }}" required>
        </div>

        <br>

        <div>
            <label>Descripción:</label><br>
            <textarea name="descripcion">{{ old('descripcion', $proyecto->descripcion) }}</textarea>
        </div>

        <br>

        <div>
            <label>Estado:</label><br>
            <select name="estado" required>
                <option value="registrado" {{ $proyecto->estado == 'registrado' ? 'selected' : '' }}>Registrado</option>
                <option value="en_proceso" {{ $proyecto->estado == 'en_proceso' ? 'selected' : '' }}>En Proceso</option>
                <option value="finalizado" {{ $proyecto->estado == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
            </select>
        </div>

        <br>

        <button type="submit">Actualizar Proyecto</button>
    </form>

    <br>

    <a href="{{ route('proyectos.index') }}">← Volver a la lista</a>

</body>
</html>