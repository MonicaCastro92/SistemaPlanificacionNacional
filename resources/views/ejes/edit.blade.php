<x-app-layout>
    <h1>Editar Eje</h1>

    <a href="{{ route('ejes.index') }}">Volver</a>

    <form action="{{ route('ejes.update', $eje->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $eje->nombre }}" required>
        <br><br>

        <label>Descripción:</label>
        <textarea name="descripcion">{{ $eje->descripcion }}</textarea>
        <br><br>

        <button type="submit">Actualizar</button>
    </form>
</x-app-layout>