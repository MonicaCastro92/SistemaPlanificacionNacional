<x-app-layout>
    <h1>Crear Institución</h1>

    <a href="{{ route('institucions.index') }}">⬅️ Volver</a>

    <br><br>

    <form action="{{ route('institucions.store') }}" method="POST">
        @csrf

        <label>Código:</label>
        <input type="text" name="codigo" required>
        <br><br>

        <label>Subsector:</label>
        <input type="text" name="subsector" required>
        <br><br>

        <label>Nivel de Gobierno:</label>
        <input type="text" name="nivel_gobierno" required>
        <br><br>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
        <br><br>

        <button type="submit">Guardar</button>
    </form>
</x-app-layout>