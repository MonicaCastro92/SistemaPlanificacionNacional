<h1>Crear Usuario</h1>

<a href="{{ route('users.index') }}">Volver</a>
<a href="{{ route('users.create') }}">Crear Usuario</a>
<br><br>

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="name" required>
    <br></br>

    <label>Apellido:</label>
    <input type="text" name="apellido" required>
    <br></br>

    <label>Cedula:</label>
    <input type="text" name="cedula" required>
    <br></br>

    <label>Direccion:</label>
    <input type="text" name="direccion" required>
    <br></br>

    <label>Email:</label>
    <input type="text" name="email" required>
    <br></br>


    <label>Rol:</label>
    <select name="role_id" required>
        <option value="">Seleccione un rol</option>
        @foreach($roles as $role)
            <option value="{{ $role->id }}">{{ $role->nombre }}</option>
        @endforeach
    </select>
    <br></br>

    <label>Contrasena:</label>
    <input type="text" name="password" required>

    <br><br>

    <button type="submit">Guardar</button>
</form>