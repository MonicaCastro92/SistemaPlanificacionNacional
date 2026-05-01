<x-app-layout>
    <h1>Editar Institución</h1>

    <a href="{{ route('institucions.index') }}">⬅️ Volver</a>

    <br><br>

    <form action="{{ route('institucions.update', $institucion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Código:</label>
        <input type="text" name="codigo" value="{{ $institucion->codigo }}" required>
        <br><br>

        <label>Subsector:</label>
        <input type="text" name="subsector" value="{{ $institucion->subsector }}" required>
        <br><br>

        <label>Nivel de Gobierno:</label>
        <input type="text" name="nivel_gobierno" value="{{ $institucion->nivel_gobierno }}" required>
        <br><br>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="Activo" {{ $institucion->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
            <option value="Inactivo" {{ $institucion->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
        </select>
        <br><br>

        <button type="submit">Actualizar</button>
    </form>
</x-app-layout>