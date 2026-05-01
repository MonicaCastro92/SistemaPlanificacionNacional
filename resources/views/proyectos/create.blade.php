<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proyecto</title>
</head>
<body>

    <h1>Crear Proyecto</h1>

    {{-- Mostrar errores de validación --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf

        <div>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
        </div>

        <br>

        <div>
            <label>Descripción:</label><br>
            <textarea name="descripcion">{{ old('descripcion') }}</textarea>
        </div>

        <br>

        <div>
            <label>Estado:</label><br>
            <select name="estado" required>
                <option value="">-- Seleccionar --</option>
                <option value="registrado" {{ old('estado') == 'registrado' ? 'selected' : '' }}>Registrado</option>
                <option value="en_proceso" {{ old('estado') == 'en_proceso' ? 'selected' : '' }}>En Proceso</option>
                <option value="finalizado" {{ old('estado') == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
            </select>
        </div>

        <br>

        <button type="submit">Guardar Proyecto</button>
    </form>

    <br>

    <a href="{{ route('proyectos.index') }}">← Volver a la lista</a>

</body>
</html>