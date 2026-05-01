<x-app-layout>
    <h1>Crear Eje</h1>

    <a href="{{ route('ejes.index') }}">⬅️ Volver</a>

    <br><br>

    <form action="{{ route('ejes.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Descripción:</label>
        <textarea name="descripcion"></textarea>
        <br><br>

        <button type="submit">Guardar</button>
    </form>
</x-app-layout>