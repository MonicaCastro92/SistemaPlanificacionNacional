<h1>Registrar Rol</h1>

<form method="POST" action="{{ route('roles.store') }}">
    @csrf

    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"></textarea><br><br>

    <label>Permisos:</label><br>
    <input type="text" name="permiso"><br><br>

    <button type="submit">Guardar</button>
</form>