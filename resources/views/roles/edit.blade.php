<h1>Editar Rol</h1>

<a href="{{ route('roles.index') }}">Volver</a>

<br><br>

<form action="{{ route('roles.update', $role->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $role->nombre }}" required>

    <br><br>

    <label>Descripción:</label>
    <input type="text" name="   descripcion" value="{{ $role->descripcion }}">

    <br><br>

    <button type="submit">Actualizar</button>
</form>